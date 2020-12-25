<?php


namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Customer;
use App\CustomerProfile;
use App\Invoice;
use App\InvoiceItem;
use App\Card;
use App\Setting;
use Stripe;
use Validator;
use Hash;

class CustomerController extends BaseController
{
    public function sendVerifyCode(Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'unique:customers',
            'phonenumber' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return $this->sendError(trans('error/message.validation_error'), $validator->errors());
        }
        
        $randomNumber = '';
    
        for ($i = 0; $i < 4; $i++) {
            $randomNumber .= mt_rand(0, 9);
        }

        $randomNumber = '1234';

        // Send verify Code

        $data = array();
        $data['code'] = $randomNumber;

        if (true) {
            return $this->sendResponse($data, trans('general.message.send_phone_verify_success'));
        } else {
            return $this->sendError(trans('error/message.send_phone_verify_error'), trans('error/message.send_phone_verify_error'));
        }
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:customers',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'unique:customers',
            'password' => 'required',
            'civil_id' => 'required',
            'birthday' => 'required|date',
            'phonenumber' => 'required',
            'paci_no' => 'required|numeric',
            'cvc' => 'required',
            'holder' => 'required',
            'token' => 'required'
        ]);

        if ($validator->fails()) {
            return $this->sendError(trans('error/message.validation_error'), $validator->errors());
        }

        $customer = Customer::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'active' => 0
        ]);

        $customerProfile = CustomerProfile::create([
            'customer_id' => $customer->id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'balance' => Setting::first()->customer_init_money,
            'civil_id' => $request->civil_id,
            'paci_no' => $request->paci_no,
            'birthday' => $request->birthday,
            'phonenumber' => $request->phonenumber,
            'stripe_customer_id' => '',
            'device_token' => '',
            'device_type' => 0
        ]);

        try{
            $customer->registerStripeCustomer();
            $customer->registerStripeCard($request->cvc, $request->holder, $request->token);
            // Card::create([
            //     'customer_id' => $customer->id,
            //     'cvc' =>  $request->cvc,
            //     'holder' =>  $request->holder,
            //     'token' => 'asdfasdfadfasdfadsf'
            // ]);
        }catch(\Exception $e) {
            $customer->profile->delete();
            $customer->delete();
            return $this->sendError(trans('error/message.customer_register_error'), "Stripe Error: ". $e->getMessage());
        }

        $data = array();

        return $this->sendResponse($data, trans('general.message.customer_register_success'));
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'password' => 'required',
            'device_type' => 'required',
            'device_token' => 'required'
        ]);

        if ($validator->fails()) {
            return $this->sendError(trans('error/message.validation_error'), $validator->errors());
        }

        $customer = Customer::where('name', $request->name)->first();

        if (!$customer) {
            return $this->sendError(trans('error/message.invalid_certification'), trans('error/message.invalid_name'));
        }

        if (Hash::check($request->password, $customer->password)) {
            $data = array();

            $data['customer_id'] = $customer->id;

            $customer->profile->device_type = $request->device_type;
            $customer->profile->device_token = $request->device_token;

            $customer->profile->save();
                          
            return $this->sendResponse($data, trans('general/message.customer_login_success'));
        } else {
            return $this->sendError(trans('error/message.invalid_certification'), trans('error/message.invalid_name'));
        }
    }

    public function info(Request $request, $customer_id) {
        $customer = Customer::find($customer_id);

        if (!$customer) {
            return $this->sendError(trans('error/message.invalid_customer'), trans('error/message.invalid_customer_message'));
        } 

        $data = array();
        
        $data['balance'] = number_format($customer->profile->balance, 2, '.', '');  
        $data['active'] = $customer->active;
        $data['last_debt'] = $customer->getLastDebt();

        return $this->sendResponse($data, trans('general/message.customer_info_success'));
    }

    public function cards(Request $request, $customer_id) {
        $customer = Customer::find($customer_id);

        if (!$customer) {
            return $this->sendError(trans('error/message.invalid_customer'), trans('error/message.invalid_customer_message'));
        } 

        $data = array();
        
        $data['cards'] = $customer->getCardsInfo();  

        return $this->sendResponse($data, trans('general/message.customer_info_success'));
    }

    public function addCard(Request $request) {
        $validator = Validator::make($request->all(), [
            'customer_id' => 'required',
            'cvc' => 'required',
            'holder' => 'required',
            'token' => 'required'
        ]);


        if ($validator->fails()) {
            return $this->sendError(trans('error/message.validation_error'), $validator->errors());
        }

       $customer = Customer::find($request->customer_id);

        if (!$customer) {
            return $this->sendError(trans('error/message.invalid_customer'), trans('error/message.invalid_customer_message'));
        } 

        try{
            $customer->registerStripeCard($request->cvc, $request->holder, $request->token);
            
            // Card::create([
            //     'customer_id' => $customer->id,
            //     'cvc' =>  $request->cvc,
            //     'holder' =>  $request->holder,
            //     'token' => 'asdfasdfadfasdfadsf'
            // ]);
        }catch(\Exception $e) {
            return $this->sendError(trans('error/message.customer_register_error'), "Stripe Error: ". $e->getMessage());
        }
        
        $data = array();

        $data['cards'] = $customer->getCardsInfo();  

        return $this->sendResponse($data, trans('general/message.customer_add_card_success'));
    }

    public function debtHistory(Request $request, $customer_id)
    {
        $customer = Customer::find($customer_id);

        if (!$customer) {
            return $this->sendError(trans('error/message.invalid_customer'), trans('error/message.invalid_customer_message'));
        } 


        $data = array();

        $data['total_debt'] = $customer->getTotalDebtMoney();
        $data['debtList'] = $customer->getDebtHistory();

        return $this->sendResponse($data, trans('general/message.customer_debt_history_success'));
    }

    public function history(Request $request, $customer_id, $key)
    {
        $customer = Customer::find($customer_id);

        if (!$customer) {
            return $this->sendError(trans('error/message.invalid_customer'), trans('error/message.invalid_customer_message'));
        } 


        $data = array();

        $data['historyList'] = $customer->getHistory($key);

        return $this->sendResponse($data, trans('general/message.customer_history_success'));
    }

    public function debtItemHistory(Request $request, $customer_id, $invoice_id) {
        $customer = Customer::find($customer_id);

        if (!$customer) {
            return $this->sendError(trans('error/message.invalid_customer'), trans('error/message.invalid_customer_message'));
        } 

        $invoice = Invoice::find($invoice_id);

        if(!$invoice) {
            return $this->sendError(trans('error/message.invalid_invoice'), trans('error/message.invalid_invoice_message'));
        }

        if($invoice->customer_id != $customer_id) {
            return $this->sendError(trans('error/message.invalid_customer_invoice'), trans('error/message.invalid_customer_invoice_message'));
        }

        $invoiceItems = InvoiceItem::whereInvoice_id($invoice->id)->get();

        $data = array();
        
        $data['invoice'] = $invoice->toData();
        $data['items'] = array();

        foreach ($invoiceItems as $invoiceItem) {
            array_push($data['items'], $invoiceItem->toData());
        }

        return $this->sendResponse($data, trans('general/message.customer_debt_item_history_success'));
    }

    public function profile(Request $request, $customer_id) {
        $customer = Customer::find($customer_id);

        if (!$customer) {
            return $this->sendError(trans('error/message.invalid_customer'), trans('error/message.invalid_customer_message'));
        } 

        $data = array();
        
        $data['first_name'] = $customer->profile->first_name;
        $data['last_name'] = $customer->profile->last_name;
        $data['email'] = $customer->email;
        $data['phonenumber'] = $customer->profile->phonenumber;
        $data['cards'] = $customer->getCardsInfo();  

        return $this->sendResponse($data, trans('general/message.customer_profile_success'));
    }

    public function update(Request $request) {
       $validator = Validator::make($request->all(), [
            'customer_id' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phonenumber' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->sendError(trans('error/message.validation_error'), $validator->errors());
        }

        $customer = Customer::find($request->customer_id);

        if (!$customer) {
            return $this->sendError(trans('error/message.invalid_customer'), trans('error/message.invalid_customer_message'));
        } 

        $customer->profile->first_name = $request->first_name;
        $customer->profile->last_name = $request->last_name;
        $customer->profile->phonenumber = $request->phonenumber;
        
        $customer->profile->save();

        $customer->email = $request->email;
        $customer->save();

        $data = array();

        $data = $customer;
        
        return $this->sendResponse($data, trans('general/message.customer_update_success'));
    }


    public function password(Request $request) {
       $validator = Validator::make($request->all(), [
            'customer_id' => 'required',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return $this->sendError(trans('error/message.validation_error'), $validator->errors());
        }

        $customer = Customer::find($request->customer_id);

        if (!$customer) {
            return $this->sendError(trans('error/message.invalid_customer'), trans('error/message.invalid_customer_message'));
        } 

        $customer->password = bcrypt($request->password);
        $customer->save();

        $data = array();

        $data = $customer;
        
        return $this->sendResponse($data, trans('general/message.customer_password_success'));
    }
}