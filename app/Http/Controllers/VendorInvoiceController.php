<?php

namespace App\Http\Controllers;

use App\Vendor;
use App\VendorInvoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class VendorInvoiceController extends Controller
{
    public function index(Request $request)
    {

        $s = $request->input('s');
        $vendor_invoices = VendorInvoice::searchByName($s);
//        $vendor_invoices = VendorInvoice::whereStatus(1)->orderBy('created_at', 'desc')->search($s)->paginate(10);
        return view('vendor_invoice.index', compact('vendor_invoices','s'));
    }

    public function notPaid(Request $request) {
        $s = $request->input('s');

        $vendor_invoices = VendorInvoice::whereStatus(0)->orderBy('created_at', 'desc')->search($s)->paginate(10);

        return view('vendor_invoice.not_paid', compact('vendor_invoices','s'));
    }


    public function send($id, Request $request){
        $vendorInvoice = VendorInvoice::find($id);

        $vendorInvoice->status = 1;

        $vendorInvoice->save();

        $vendor = $vendorInvoice->vendor;

        $vendor->profile->balance = $vendor->profile->balance - $vendorInvoice->send_money;
        if($vendor->profile->balance < 0)
            $vendor->profile->balance = 0;

        $vendor->profile->save();

        Session::flash('message', trans('general/message.vendor_invoice_success_send'));
        Session::flash('type', 'success');
        Session::flash('title', trans('general/message.send_success'));
        
        return redirect()->route('vendor_invoices.notpaid');
    }
}