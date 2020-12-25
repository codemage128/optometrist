<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'customer_init_money', 'vendor_init_commission', 'customer_add_percent', 'customer_add_money'
    ];

    protected $hidden = [
        'updated_at', 'created_at'
    ];
}
