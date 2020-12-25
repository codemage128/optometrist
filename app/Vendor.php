<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    //
    protected $fillable = [
        'name', 'email', 'password', 'active',
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
        return $this->hasOne('App\VendorProfile');
    }

    public function getLast4History() {
        $invoices = Invoice::whereStatus(2)->whereVendor_id($this->id)->orderBy('created_at','desc')->take(4)->get();

        $data = array();

        foreach($invoices as $invoice) {
            array_push($data, $invoice->toData());
        }

        return $data;
    }

   public function getHistory($key) {
        if($key == '@') {
            $invoices = Invoice::where('status', '>=', 2)->whereVendor_id($this->id)->orderBy('created_at','desc')->limit(10)->get();
        }else{
            $invoices = Invoice::where('status', '>=', 2)->whereRaw('(`invoice_no` like "%' . $key . '%" OR `created_at` >= date("'. $key . '") OR `pay_date` = "'. $key . '" )')->whereVendor_id($this->id)->orderBy('created_at','desc')->limit(10)->get();
        }

        $data = array();

        foreach($invoices as $invoice) {
            array_push($data, $invoice->toData());
        }

        return $data;
    }

    public function sendPushNotification($title, $message, $data)  { 
        if($this->profile->device_token == "")
            return;
        if($this->profile->device_type == 0){                        //Iphone
            $tokens = array();
            array_push($tokens, $this->profile->device_token);
            $data = [ 'title' => $title, 'message' => $message, 'invoice_no' => $data['invoice_no'] ];
            PushNotification::sendApns(1, $tokens, $data);             //$type: 0 :customer 1:vendr
        }else{
            $tokens = array();
            array_push($tokens, $this->profile->device_token);
            $data = ['title' => $title, 'message' => $message, 'invoice_no' => $data['invoice_no'] ];
            PushNotification::sendGcm(1, $tokens,  $data);
        }
    }   
}
