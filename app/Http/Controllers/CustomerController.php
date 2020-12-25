<?php

namespace App\Http\Controllers;

use Auth;
use App\Customer;
use App\CustomerProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Card;
use Stripe;
use Validator;
use Hash;

class CustomerController extends Controller
{
    public function index(Request $request)
    {
        $s = $request->input('s');

        $customers = Customer::latest()->search($s)->paginate(10);

        return view('customer.index', compact('customers', 's'));
    }

    public function create(){
        $user = Auth::user();
        return view('customer.create', compact('user'));
    }
    
    public function report(){
        return view('customer.report');
    }
    
    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required|unique:customers',
            'email' => 'required|unique:customers|email',
            'password' => 'required',
            'phonenumber' => 'required',
            'birthday' => 'required',
            'civil_id' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'paci_no' => 'required',
            // 'card_no' => 'required',
            // 'expire_month' => 'required',
            // 'expire_year' => 'required',
            // 'cvc' => 'required',
        ]);

        if ($request->hasFile('avatar')) {
            $avatar = $request->avatar;
            $avatar_new_name = time() . $avatar->getClientOriginalName();
            $avatar->move('uploads/customers/', $avatar_new_name);
            $avatar_name = 'uploads/customers/' . $avatar_new_name;
        }

        $customer = Customer::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'active' => 1
        ]);

        CustomerProfile::create([
            'customer_id' => $customer->id,
            'balance' => 0,
            'civil_id' => $request->civil_id,
            'birthday' => $request->birthday,
            'phonenumber' => $request->phonenumber,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'paci_no' => $request->paci_no,
            'avatar' => $avatar_name,
            'stripe_customer_id' => '',
            'device_token' => '',
            'device_type' => 0
        ]);

        try{
            $customer->registerStripeCustomer();
            // $customer->registerStripeCard($request->card_no, $request->expire_month, $request->expire_year, $request->cvc, $request->token);
        }catch(\Exception $e) {
            $customer->profile->delete();
            $customer->delete();
            return $this->sendError(trans('error/message.customer_register_error'), "Stripe Error: ". $e->getMessage());
        }
        
        Session::flash('message', trans('general/message.customer_success_create'));
        Session::flash('type', 'success');
        Session::flash('title', trans('general/message.create_success'));

        return redirect()->route('customers.index');
    }

    public function edit($id)
    {
        $customer = Customer::find($id);

        return view('customer.edit', compact('customer'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'active' => 'required',
            'birthday' => 'required|date',
            'phonenumber' => 'required',
            'balance' => 'required',
            'civil_id' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'paci_no' => 'required',
        ]);

        $customer = Customer::find($id);

        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->active = $request->active;

        $avatar_name = null;

        if ($request->hasFile('avatar')) {
            $avatar = $request->avatar;
            $avatar_new_name = time() . $avatar->getClientOriginalName();
            $avatar->move('uploads/customers/', $avatar_new_name);
            $avatar_name = 'uploads/customers/' . $avatar_new_name;
        }

        $customer->save();

        $customer->profile->phonenumber = $request->phonenumber;
        $customer->profile->birthday = $request->birthday;
        $customer->profile->civil_id = $request->civil_id;
        $customer->profile->balance = $request->balance;
        $customer->profile->first_name = $request->first_name;
        $customer->profile->last_name = $request->last_name;
        $customer->profile->paci_no = $request->paci_no;

        if ($avatar_name)
            $customer->profile->avatar = $avatar_name;

        $customer->profile->save();

        Session::flash('message', trans('general/message.customer_success_update'));
        Session::flash('type', 'success');
        Session::flash('title', trans('general/message.update_success'));

        return redirect()->route('customers.index');
    }


    public function delete($id)
    {

        $customer = Customer::findOrFail($id);
        $customer->delete();

        Session::flash('message',  trans('general/message.customer_success_delete'));
        Session::flash('type', 'success');
        Session::flash('title', trans('general/message.delete_success'));

        return redirect()->route('customers.index');
    }
}