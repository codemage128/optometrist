<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VendorProfile extends Model
{
    //
    protected $fillable = [
    	'vendor_id',
	    'balance', 
	    'store_name', 
	    'store_location', 
	    'avatar', 
	    'commission', 
	    'device_token', 
	    'device_type'
    ];

    protected $hidden = [
        'created_at', 'updated_at'
    ];

    public function vendor()
    {
        return $this->belongsTo('App\Vendor');
    }
}
