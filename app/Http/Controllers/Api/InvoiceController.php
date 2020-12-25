<?php


namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Invoice;
use App\InvoiceItem;
use App\Vendor;
use App\Customer;
use Validator;
use Stripe;
use Hash;

class InvoiceController extends BaseController
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'vendor_id' => 'required',
            'money' => 'required|numeric|min:1',
        ]);

        if ($validator->fails()) {
            return $this->sendError(trans('error/message.validation_error'), $validator->errors());
        }

        if (!Vendor::find($request->vendor_id)) {
            return $this->sendError(trans('error/message.invalid_vendor'), trans('error/message.invalid_vendor_message'));
        }

        $invoice = Invoice::create([
            'vendor_id' => $request->vendor_id,
            'customer_id' => 0,
            'money' => $request->money,
            'status' => 0,
            'type' => 0,
            'paid' => 0,
            'total_money' => $request->money,
            'invoice_no' => strval(random_int(100000000, 999999999))
        ]);

        $renderer = new \BaconQrCode\Renderer\Image\Png();
        $renderer->setHeight(512);
        $renderer->setWidth(512);
        $writer = new \BaconQrCode\Writer($renderer);

        $qr_data = array();

        $qr_data['invoice_no'] = $invoice->invoice_no;
        $qr_data['money'] = number_format($invoice->money, 2, '.', '');
        $qr_data['store_name'] = $invoice->vendor->profile->store_name;
        $qr_data['store_location'] = $invoice->vendor->profile->store_location;
        $qr_data['sticker'] = false;

        $qrcode = base64_encode($writer->writeString(json_encode($qr_data)));

        $data = array();
        $data['invoice_no'] = $invoice->invoice_no;
        $data['money'] = number_format($invoice->money, 2, '.', '');
        $data['qrcode'] = $qrcode;

        return $this->sendResponse($data, trans('general/message.invoice_register_success'));
    }

    public function vendorStickerInfo(Request $request) {
        $validator = Validator::make($request->all(), [
            'vendor_id' => 'required'
        ]);

        if ($validator->fails()) {
            return $this->sendError(trans('error/message.validation_error'), $validator->errors());
        }

        $vendor = Vendor::find($request->vendor_id);

        if (empty($vendor)) {
            return $this->sendError(trans('error/message.invalid_vendor'), trans('error/message.invalid_vendor_message'));
        }

        $renderer = new \BaconQrCode\Renderer\Image\Png();
        $renderer->setHeight(512);
        $renderer->setWidth(512);
        $writer = new \BaconQrCode\Writer($renderer);

        $qr_data = array();

        $qr_data['sticker'] = true;
        $qr_data['store_name'] = $vendor->profile->store_name;
        $qr_data['store_location'] = $vendor->profile->store_location;
        $qr_data['vendor_id'] = $vendor->id;
        $qr_data['vendor_avatar'] = $vendor->profile->avatar;

        $writer->writeFile(json_encode($qr_data), 'qrcode.png');

        $qrcode = base64_encode($writer->writeString(json_encode($qr_data)));

        $data = array();

        $data['store_name'] = $vendor->profile->store_name;
        $data['store_location'] = $vendor->profile->store_location;
        $data['vendor_avatar'] = $vendor->profile->avatar;
        $data['qrcode'] = $qrcode;

        return $this->sendResponse($data, trans('general/message.vendor_sticker_info'));
    }


    public function registerFromSticker(Request $request) {
        $validator = Validator::make($request->all(), [
            'vendor_id' => 'required',
            'customer_id' => 'required',
            'money' => 'required|numeric|min:1',
        ]);

        if ($validator->fails()) {
            return $this->sendError(trans('error/message.validation_error'), $validator->errors());
        }
        
        if (!Customer::find($request->customer_id)) {
            return $this->sendError(trans('error/message.invalid_customer'), trans('error/message.invalid_customer_message'));
        }

        if (!Vendor::find($request->vendor_id)) {
            return $this->sendError(trans('error/message.invalid_vendor'), trans('error/message.invalid_vendor_message'));
        }

        $invoice = Invoice::create([
            'vendor_id' => $request->vendor_id,
            'customer_id' => $request->customer_id,
            'money' => $request->money,
            'status' => 0,
            'type' => 0,
            'paid' => 0,
            'total_money' => $request->money,
            'invoice_no' => strval(random_int(100000000, 999999999))
        ]);

        $data['invoice'] = $invoice->toData();

        return $this->sendResponse($data, trans('general/message.invoice_register_success'));
    }

    public function registerBarQrShow(Request $request) {
        if($request->has('customer_id')) {
            $customer = Customer::find($request->customer_id);

            if (!$customer) {
                return $this->sendError(trans('error/message.invalid_customer'), trans('error/message.invalid_customer_message'));
            }

            $invoice = Invoice::create([
                    'vendor_id' => 0,
                    'customer_id' =>  $customer->id,
                    'money' => 0,
                    'status' => 0,
                    'type' => 0,
                    'paid' => 0,
                    'total_money' => 0,
                    'invoice_no' => strval(random_int(100000000, 999999999))
                ]);

            $renderer = new \BaconQrCode\Renderer\Image\Png();
            $renderer->setHeight(512);
            $renderer->setWidth(512);
            $writer = new \BaconQrCode\Writer($renderer);

            $data = array();

            $data['qrcode'] = base64_encode($writer->writeString(json_encode(['invoice_no' => $invoice->invoice_no]))); 
            $data['barcode'] = \Milon\Barcode\DNS1D::getBarcodePNG($invoice->invoice_no , "C39+",2, 50);
            $data['invoice_no'] = strval($invoice->invoice_no);
            
            return $this->sendResponse($data, trans('general/message.invoice_register_success'));
        }
    }

    public function putMoneyInvoice(Request $request) {
        $validator = Validator::make($request->all(), [
            'invoice_no' => 'required',
            'vendor_id' => 'required',
            'money' => 'required|numeric|min:1',
        ]);

        if ($validator->fails()) {
            return $this->sendError(trans('error/message.validation_error'), $validator->errors());
        }

   
        $invoice = Invoice::where('invoice_no', $request->invoice_no)->first();

        if (empty($invoice)) {
            return $this->sendError(trans('error/message.invalid_invoice'), trans('error/message.invalid_invoice_message'));
        }

        if ($invoice->status > 0) {
            return $this->sendError(trans('error/message.invoice_processed'), trans('error/message.invoice_processed_message'));
        }

        $vendor = Vendor::find($request->vendor_id);
        
        if (empty($vendor)) {
            return $this->sendError(trans('error/message.invalid_vendor'), trans('error/message.invalid_vendor_message'));
        }

        $invoice->vendor_id =  $request->vendor_id;
        $invoice->money = $request->money;
        $invoice->total_money = $request->money;

        $invoice->save();

        $data['invoice'] = $invoice;

        return $this->sendResponse($data, trans('general/message.put_money_invoice'));
    }

    public function getInvoice($invoice_no)
    {
        $invoice = Invoice::where('invoice_no', $invoice_no)->first();

        if (!$invoice) {
            return $this->sendError(trans('error/message.invalid_invoice'), trans('error/message.invalid_invoice_message'));
        }

        $data = $invoice->toData();

        return $this->sendResponse($data, trans('general/message.invoice_get_success'));
    }

    public function payInvoice(Request $request)
    {
        // type: 4 (4 weeks), 1 (1 week)
        $validator = Validator::make($request->all(), [
            'invoice_no' => 'required',
            'customer_id' => 'required',
            'type' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->sendError(trans('error/message.validation_error'), $validator->errors());
        }

        $invoice = Invoice::where('invoice_no', $request->invoice_no)->first();

        if (!$invoice || $invoice->vendor_id <= 0 || $invoice->money <= 0) {
            return $this->sendError(trans('error/message.invalid_invoice'), trans('error/message.invalid_invoice_message'));
        }

        if ($invoice->status > 0) {
            return $this->sendError(trans('error/message.invoice_processed'), trans('error/message.invoice_processed_message'));
        }

        $customer = Customer::find($request->customer_id);

        if (!$customer) {
            return $this->sendError(trans('error/message.invalid_customer'), trans('error/message.invalid_customer_message'));
        } else {
            $balance = $customer->profile->balance;

            if ($balance < $invoice->money) {
                return $this->sendError(trans('error/message.not_enough_money'), trans('error/message.not_enough_money_message'));
            } else {
                $invoice->type = $request->type;
                $invoice->customer_id = $request->customer_id;
                $invoice->status = 1;
                $invoice->pay_date = Carbon::now()->addWeek($request->type - 1);
                $invoice->save();

                $firstInvoiceItem = null;

                for ($i = 0; $i < $invoice->type; $i++) {
                    $invoiceItem = InvoiceItem::create([
                        'invoice_id' => $invoice->id,
                        'pay_date' => Carbon::now()->addWeek($i),
                        'money' => $invoice->money / $invoice->type,
                        'paid' => 0
                    ]);

                    if($i == 0) 
                        $firstInvoiceItem = $invoiceItem;
                }

                $data = array();

                $data['customer_id'] = $invoice->customer->id;
                $data['vendor_id'] = $invoice->vendor->id;
                $data['first_item'] = $firstInvoiceItem->toData();
                $data['store_name'] = $invoice->vendor->profile->store_name;
                $data['store_location'] = $invoice->vendor->profile->store_location;
                $data['invoice_no'] = strval($invoice->invoice_no);
                
                return $this->sendResponse($data, trans('general/message.invoice_pay_success'));
            }
        }
    }

    public function chargeFirstInvoiceItem(Request $request) {
        $validator = Validator::make($request->all(), [
            'invoice_item_id' => 'required',
            'customer_id' => 'required',
            'card_id' => 'required'
        ]);

        if ($validator->fails()) {
            return $this->sendError(trans('error/message.validation_error'), $validator->errors());
        }

        $invoiceItem = InvoiceItem::find($request->invoice_item_id);

        $customer = Customer::find($request->customer_id);

        if($invoiceItem->invoice->status < 1)
            return $this->sendError(trans('error/message.invalid_invoice'), trans('error/message.invalid_invoice_message'));

        if(!$invoiceItem)
            return $this->sendError(trans('error/message.invalid_invoice_item'), trans('error/message.invalid_invoice_item'));

        if($invoiceItem->paid > 0)
            return $this->sendError(trans('error/message.invoice_paid'), trans('error/message.invoice_paid_message'));
        
        $invoice = $invoiceItem->invoice;
        
        if($invoice->customer_id != $request->customer_id)
            return $this->sendError(trans('error/message.invalid_customer_invoice'), trans('error/message.invalid_customer_invoice_message'));
        
        $result = $invoiceItem->charge($request->card_id);

        $data = array();

        if ($result['success']) {
            $invoice->status = 2;

            $invoice->save();

            $customer->profile->balance = $customer->profile->balance - $invoice->total_money;

            if($customer->profile->balance < 0)
                $customer->profile->balance = 0;

            $customer->profile->save();

            $data['invoice_no'] = strval($invoice->invoice_no);
            $data['invoice_status'] = $invoice->status;
            $data['pay_date'] = $invoice->pay_date;
            $data['store_name'] = $invoice->vendor->profile->store_name;
            $data['store_location'] = $invoice->vendor->profile->store_location;
            $data['customer_balance'] = number_format( $customer->profile->balance, 2, '.', '');

            $vendor = $invoice->vendor;
            
            // $vendor->sendPushNotification(trans('general/message.payment_success'), $invoice->total_money." KD ".trans('general/message.payment_success_content'), $invoice->toData());
            
            return $this->sendResponse($data, trans('general/message.charge_invoice_item_success'));
        }else{
            $invoice->status = 0;

            $invoice->save();

            return $this->sendError(trans('error/message.charge_invoice_item_error'), $result['message']);
        }
    }

    public function chargeInvoiceItems(Request $request) {
       $validator = Validator::make($request->all(), [
            'invoice_item_ids' => 'required',
            'customer_id' => 'required',
            'card_id' => 'required'
        ]);

        if ($validator->fails()) {
            return $this->sendError(trans('error/message.validation_error'), $validator->errors());
        }

        $invoiceItemIds = $request->invoice_item_ids;

        foreach ($invoiceItemIds as $invoiceItemId) {

            $invoiceItem = InvoiceItem::find($invoiceItemId);

            $customer = Customer::find($request->customer_id);
            $invoice = $invoiceItem->invoice;

            if(!$invoiceItem)
                return $this->sendError(trans('error/message.invalid_invoice_item'), trans('error/message.invalid_invoice_item'));
            
            if($invoiceItem->paid > 0)
                return $this->sendError(trans('error/message.invoice_processed'), trans('error/message.invoice_processed_message'));

            if($invoice->customer_id != $request->customer_id)
                return $this->sendError(trans('error/message.invalid_customer_invoice'), trans('error/message.invalid_customer_invoice_message'));
            
            $result = $invoiceItem->charge($request->card_id);

            if ($result['success']) {
            }else{
                return $this->sendError(trans('error/message.charge_invoice_item_error'), $result['message']);
            }
        }

        $data = array();
        $data['invoice_item_ids'] = $invoiceItemIds;

        if($customer)
            $data['customer_balance'] = number_format($customer->profile->balance, 2, '.', '');
        else
            $data['customer_balance'] = number_format(0, 2, '.', '');

        return $this->sendResponse($data, trans('general/message.charge_invoice_item_success'));
    }
}