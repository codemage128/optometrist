<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use App\Card;
use Stripe;

class Customer extends Model
{
    //
    protected $fillable = [
        'name', 'email', 'password', 'active'
    ];

    protected $hidden = [
        'password', 'created_at', 'updated_at'
    ];

    public function scopeSearch($query, $s)
    {
        return $query->where('email', 'like', '%' . $s . '%')->orWhere('name', 'like', '%' . $s . '%');
    }

    public function profile()
    {
        return $this->hasOne('App\CustomerProfile');
    }

    public function cards()
    {
        return $this->hasMany('App\Card');
    }

    public function getCardsInfo() {
        $stripe_api_key = env('STRIPE_SECRET', '');
        $stripe = Stripe::make($stripe_api_key);

        $cards = $stripe->cards()->all($this->profile->stripe_customer_id);

        $cardList = $cards['data'];

        // $cardList = array();
        
        // $cardItem = array();

        // $cardItem['id'] = '123123123';
        // $cardItem['brand'] = 'visa';
        // $cardItem['last4'] = '1232';
        // $cardItem['exp_month'] = 12;
        // $cardItem['exp_year'] = 2012;
        // $cardItem['funding'] = 'asdfasdf';

        // array_push($cardList, $cardItem);

        // $cardItem = array();

        // $cardItem['id'] = '222233333';
        // $cardItem['brand'] = 'masterCard';
        // $cardItem['last4'] = '1232';
        // $cardItem['exp_month'] = 12;
        // $cardItem['exp_year'] = 2013;
        // $cardItem['funding'] = 'asdfasdf';

        // array_push($cardList, $cardItem);

        $result = array();
        if(!empty($cardList)) {
            foreach($cardList as $card) {
                $cardInfo = Card::whereToken($card['id'])->first();

                if(!empty($cardInfo)) {
                    $item = array();

                    $item['id'] = $cardInfo->id;
                    $item['brand'] = $card['brand'];
                    $item['last4'] = $card['last4'];
                    $item['exp_month'] = $card['exp_month'];
                    $item['exp_year'] = $card['exp_year'];
                    $item['funding'] = $card['funding'];
                    $item['holder'] = $cardInfo->holder;
                    $item['cvc'] = $cardInfo->cvc;

                    array_push($result, $item);
                }
            }

            return $result;
        }else {
            return null;
        }
    }

    public function registerStripeCustomer() {
        if ($this->profile->stripe_customer_id == "") {
            $stripe_api_key = env('STRIPE_SECRET', '');

            $stripe = Stripe::make($stripe_api_key);

            $stripeCustomer = $stripe->customers()->create([
                'email' => $this->email,
            ]);

            $this->profile->stripe_customer_id = $stripeCustomer['id'];
            
            $this->profile->save();
        }

    }

    public function registerStripeCard($cvc, $holder, $token) {
        if ($this->profile->stripe_customer_id != "") {
            $stripe_api_key = env('STRIPE_SECRET', '');
            
            $stripe = Stripe::make($stripe_api_key);

            $card = $stripe->cards()->create($this->profile->stripe_customer_id, $token);

            Card::create([
                'customer_id' => $this->id,
                'cvc' =>  $cvc,
                'holder' => $holder,
                'token' => $card['id']
            ]);
        }
    }

    public function getDeadLineDebts() {
        $invoices = Invoice::whereStatus(2)->wherePaid(0)->whereCustomer_id($this->id)->get();

        $data = array();

        foreach($invoices as $invoice) {
            $unpaidInvoiceItems = $invoice->unpaidItems();

            foreach($unpaidInvoiceItems as $invoiceItem) {
                if($invoiceItem->pay_date <= date('Y-m-d')) {
                    $item = array();
                    
                    $item['invoice_item_id'] = $invoiceItem->id;
                    $item['money'] = $invoiceItem->money;
                    $item['invoice_no'] = $invoice->invoice_no;

                    array_push($data, $item);
                }
            }
        }

        return $data;
    }

    public function getLastDebt() {
        $invoice = Invoice::whereStatus(2)->wherePaid(0)->whereCustomer_id($this->id)->orderBy('created_at','asc')->first();


        if(!empty($invoice))
            return $invoice->toData();
        else
            return null;
    }

    public function getDebtHistory() {
        $invoices = Invoice::whereStatus(2)->whereCustomer_id($this->id)->orderBy('created_at','desc')->get();

        $data = array();

        foreach($invoices as $invoice) {
            array_push($data, $invoice->toData());
        }

        return $data;
    }

    public function getHistory($key) {
        if($key == '@') {
            $invoices = Invoice::where('status', '>=', 2)->whereCustomer_id($this->id)->orderBy('created_at','desc')->limit(10)->get();
        }else{
            $invoices = Invoice::where('status', '>=', 2)->whereRaw('(`invoice_no` like "%' . $key . '%" OR `created_at` >= date("'. $key . '") OR `pay_date` = "'. $key . '" )')->whereCustomer_id($this->id)->orderBy('created_at','desc')->limit(10)->get();
        }

        $data = array();

        foreach($invoices as $invoice) {
            array_push($data, $invoice->toData());
        }

        return $data;
    }

    public function getTotalDebtMoney() {
        $money = Invoice::whereStatus(2)->wherePaid(0)->whereCustomer_id($this->id)->sum('money');
        return $money;
    }
}
