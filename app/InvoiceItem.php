<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Stripe;

use App\Card;
use App\VendorInvoice;
use App\Setting;

class InvoiceItem extends Model
{
    //
    protected $fillable = [
        'invoice_id', 'pay_date', 'money', 'paid'
    ];

    protected $hidden = [
        'created_at', 'updated_at'
    ];

    public function invoice(){
        return $this->belongsTo('App\Invoice');
    }

    public function charge($card_id) {
        $invoice = $this->invoice;

        $data = array();
        try{
            $customer = $invoice->customer;
            $card = Card::find($card_id);

            if(!empty($card) && $customer->id == $card->customer_id) {
                $stripe_api_key = env('STRIPE_SECRET', '');
                   $stripe = Stripe::make($stripe_api_key);

                   $customer->registerStripeCustomer();

                   $charge = $stripe->charges()->create([
                       'amount' => $this->money,
                       'currency' => 'USD',
                       'customer' => $customer->profile->stripe_customer_id,
                       'source' => $card['token']
                   ]);

                // $charge = array();
                // $charge['paid'] = true;

                if ($charge['paid']) {
                    $invoice = $this->invoice;

                    $unPaidCountBefore = count($this->invoice->unpaidItems());

                    $this->paid = 1;

                    $this->save();

                    $unPaidCountAfter = count($this->invoice->unpaidItems());

                    $totalCount = count($this->invoice->items);

                    $customer_add_percent = Setting::first()->customer_add_percent; 
                    
                    if(($totalCount - $unPaidCountBefore) * 100 / $totalCount < $customer_add_percent) {
                        if(($totalCount - $unPaidCountAfter) * 100 / $totalCount >= $customer_add_percent) {
                            // $customer->profile->balance = $customer->profile->balance + Setting::first()->customer_add_money;
                            $customer->profile->balance = $customer->profile->balance + $invoice->total_money;
                            $customer->profile->save();
                        } 
                    }

                    $invoice->money = $invoice->money - $this->money;

                    if($invoice->money < 0)
                        $invoice->money = 0;
                    
                    $invoice->save();

                    if($unPaidCountAfter == 0){
                        $invoice->paid = 1;

                        $invoice->save();
                    }
                    
                    $vendor = $invoice->vendor;

                    $send_money = $this->money * ( 100 - $vendor->profile->commission) / 100;
                    
                    $vendorInvoice = VendorInvoice::create([
                        'vendor_id' => $vendor->id,
                        'total_money' => $this->money,
                        'commission' => $vendor->profile->commission,
                        'send_money' => $send_money,
                        'status' => 0
                    ]);

                    $vendor->profile->balance = $vendor->profile->balance + $send_money;

                    $vendor->profile->save();

                    $data['success'] = true;
                    $data['message'] = trans('error/message.charge_invoice_item_success');

                    return $data;
                }else{
                    $data['success'] = false;
                    $data['message'] = "Stripe Error " . trans('error/message.charge_invoice_item_error_message');

                    return $data;
                }
            }else{
                $data['success'] = false;
                $data['message'] = trans('error/message.card_not_valid');
            }
        }catch (\Exception $e) {
            $data['success'] = false;
            $data['message'] = $e->getMessage();

            return $data;
        }
    }

    public function toData() {
        $item = array();
    
        $item['id'] = $this->id;
        $item['invoice_id'] = $this->invoice_id;
        $item['pay_date'] = date_format(Carbon::parse($this->pay_date), "m/d/Y");        
        $item['created_date'] = date_format($this->created_at, "m/d/Y");
        $item['created_time'] = date_format($this->created_at, "H:i A");

        if($this->paid > 0) {
            $item['pay_date_str'] = $item['pay_date'];
            $item['pay_date_days'] = 0;
        }else{
            if(Carbon::parse($this->pay_date) > Carbon::now()) {
                $item['pay_date_days'] = Carbon::parse($this->pay_date)->diffInDays(Carbon::now());
                $item['pay_date_str'] =  $item['pay_date_days'] . " Days left";
            }
            else {
                $item['pay_date_days'] = Carbon::parse($this->pay_date)->diffInDays(Carbon::now());
                $item['pay_date_str'] = $item['pay_date_days'] . " Days passed";
            }
        }

        $item['money'] = number_format($this->money, 2, '.', '');
        $item['paid'] = $this->paid;

        return $item;     
    }
}
