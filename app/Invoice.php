<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Invoice extends Model
{
    //status 0: invoice request 1: customer pay 2:charge first item 3: refunded
    protected $fillable = [
        'invoice_no', 'vendor_id', 'money', 'status', 'type', 'pay_date', 'customer_id', 'paid',
        'total_money'
    ];

    protected $hidden = [
        'updated_at'
    ];

    public function vendor()
    {
        return $this->belongsTo('App\Vendor');
    }

    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }

    public function items()
    {
        return $this->hasMany('App\InvoiceItem');
    }

    public function unpaidItems()
    {
        return InvoiceItem::where(['invoice_id' => $this->id, 'paid' => 0])->get();
    }

    public static function searchByName($name)
    {
        $invoices = Invoice::join('customers', function ($join) {
            $join->on('customers.id', '=', 'invoices.customer_id');
        })->join('vendors', function ($join) {
            $join->on('vendors.id', '=', 'invoices.vendor_id');
        })->where('customers.name', 'like', '%' . $name . '%')->orwhere('vendors.name', 'like', '%' . $name . '%')
            ->select('customers.name as c_name', 'vendors.name as v_name', 'invoices.*')->paginate(10);
        return $invoices;
    }
    
    public function scopeSearch($query, $s)
    {
//        return $this->whereJoin()->where('name', 'like', '%' . $s . '%');
    }

    public function toData()
    {
        $item = array();

        $item['id'] = $this->id;
        $item['invoice_no'] = strval($this->invoice_no);
        $item['total_money'] = number_format($this->total_money, 2, '.', '');
        $item['money'] = number_format($this->money, 2, '.', '');
        $item['pay_date'] = date_format(Carbon::parse($this->pay_date), "m/d/Y");
        $item['created_date'] = date_format($this->created_at, "m/d/Y");
        $item['created_time'] = date_format($this->created_at, "H:i A");
        $item['paid'] = $this->paid;
        $item['customer_name'] = empty($this->customer) ? '' : $this->customer->name;
        $item['vendor_id'] = empty($this->vendor) ? 0 : $this->vendor->id;
        $item['store_name'] = empty($this->vendor) ? "" : $this->vendor->profile->store_name;
        $item['store_location'] = empty($this->vendor) ? "" : $this->vendor->profile->store_location;
        $item['type'] = $this->type;
        $item['status'] = $this->status;

        if ($this->paid > 0) {
            $item['pay_date_str'] = "Complete";
            $item['pay_date_days'] = 0;
        } else {
            if (Carbon::parse($this->pay_date) > Carbon::now()) {
                $item['pay_date_days'] = Carbon::parse($this->pay_date)->diffInDays(Carbon::now());
                $item['pay_date_str'] =  $item['pay_date_days'] . " Days left";
            }
            else{
                $item['pay_date_days'] = Carbon::parse($this->pay_date)->diffInDays(Carbon::now());
                $item['pay_date_str'] = $item['pay_date_days'] . " Days passed";
            }
        }

        return $item;
    }
}
