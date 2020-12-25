<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VendorInvoice extends Model
{
    protected $fillable = [
        'vendor_id', 'total_money', 'send_money', 'status', 'commission',
    ];

    protected $hidden = [
        'updated_at',
    ];

    public function vendor()
    {
        return $this->belongsTo('App\Vendor');
    }

    public static function searchByName($name)
    {
        $datas = VendorInvoice::join('vendors', function ($join) {
            $join->on('vendors.id', '=', 'vendor_invoices.vendor_id');
        })->where('vendors.name', 'like', '%' . $name . '%')
            ->orderBy('vendor_invoices.created_at', 'desc')->paginate(10);
        return $datas;
    }

    public function scopeSearch($query, $s)
    {
//        return $this->whereJoin()->where('name', 'like', '%' . $s . '%');
    }
}
