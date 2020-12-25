<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerProfile extends Model
{
    //
    protected $fillable = [
        'customer_id',
        'balance',
        'civil_id',
        'first_name',
        'last_name',
        'paci_no',
        'birthday',
        'phonenumber',
        'stripe_customer_id',
        'device_token',
        'device_type',
        'avatar'
    ];

    protected $hidden = [
        'created_at', 'updated_at'
    ];

    public function customer(){
        return $this->belongsTo('App\Customer');
    }
}
