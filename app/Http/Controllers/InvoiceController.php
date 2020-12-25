<?php

namespace App\Http\Controllers;

use App\InvoiceItem;
use App\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class InvoiceController extends Controller
{
    public function index(Request $request)
    {

        $s = $request->input('s');
        $invoices = Invoice::searchByName($s);
//        $invoices = Invoice::whereStatus(2)->wherePaid(1)->orderBy('created_at', 'desc')->search($s)->paginate(10);
        return view('invoice.index', compact('invoices','s'));
    }

    public function notPaid(Request $request) {
        $s = $request->input('s');

        $invoices = Invoice::whereStatus(2)->wherePaid(0)->orderBy('created_at', 'desc')->search($s)->paginate(10);

        return view('invoice.not_paid', compact('invoices','s'));
    }

    public function detailInvoice($id, Request $request){
        $invoice = Invoice::find($id);

        $invoiceItems = InvoiceItem::whereInvoice_id($id)->get();

        return view('invoice.detail', compact('invoice', 'invoiceItems'));
    }
}