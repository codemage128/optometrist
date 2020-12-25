<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillable = [
        'type', 'customer_id', 'holder', 'cvc', 'token'
    ];

    protected $hidden = [
        'updated_at', 'created_at'
    ];
}
