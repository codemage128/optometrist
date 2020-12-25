<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Carbon;

use Auth;
use Validator;
use App\Vendor;
use App\VendorProfile;
use App\Setting;

class VendorController extends Controller
{
    public function index(Request $request)
    {
        $s = $request->input('s');

        $vendors = Vendor::latest()->search($s)->paginate(10);

        return view('vendor.index', compact('vendors', 's'));
    }
    public function edit($id)
    {
        $vendor = Vendor::find($id);

        return view('vendor.edit', compact('vendor'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'store_location' => 'required',
            'store_name' => 'required',
            'commission' => 'required',
            'active' => 'required'
        ]);

        $vendor = Vendor::find($id);

        $avatar_name = null;

        if ($request->hasFile('avatar')) {
            $avatar = $request->avatar;
            $avatar_new_name = time() . $avatar->getClientOriginalName();
            $avatar->move('uploads/vendors/', $avatar_new_name);
            $avatar_name = 'uploads/vendors/' . $avatar_new_name;
        }

        $vendor->name = $request->name;
        $vendor->email = $request->email;
        $vendor->active = $request->active;
        if ($request->password)
            $vendor->password = bcrypt($request->password);

        $vendor->save();

        $vendor->profile->store_name = $request->store_name;
        $vendor->profile->commission = $request->commission;
        $vendor->profile->store_location = $request->store_location;
        if ($avatar_name)
            $vendor->profile->avatar = $avatar_name;

        $vendor->profile->save();

        Session::flash('message', trans('general/message.vendor_success_update'));
        Session::flash('type', 'success');
        Session::flash('title', trans('general/message.update_success'));

        return redirect()->route('vendors.index');
    }
    
    public function create()
    {
        $user = Auth::user();
        return view('vendor.create', compact('user'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:vendors',
            'email' => 'required|unique:vendors|email',
            'password' => 'required',
            'store_location' => 'required',
            'store_name' => 'required',
            'avatar' => 'required|image',
            'confirm-password' => 'required|same:password'
        ]);

        if ($request->hasFile('avatar')) {
            $avatar = $request->avatar;
            $avatar_new_name = time() . $avatar->getClientOriginalName();
            $avatar->move('uploads/vendors/', $avatar_new_name);
            $avatar_name = 'uploads/vendors/' . $avatar_new_name;
        }

        $vendor = Vendor::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'active' => 1
        ]);

        VendorProfile::create([
            'vendor_id' => $vendor->id,
            'balance' => 0,
            'store_location' => $request->store_location,
            'store_name' => $request->store_name,
            'avatar' => $avatar_name,
            'commission' => Setting::first()->vendor_init_commission,
            'device_token' => '',
            'device_type' => 0
        ]);

        Session::flash('message', trans('general/message.vendor_success_create'));
        Session::flash('type', 'success');
        Session::flash('title', trans('general/message.create_success'));

        return redirect()->route('vendors.index');
    }

    public function delete($id)
    {

        $vendor = Vendor::findOrFail($id);
        $vendor->delete();

        Session::flash('message',  trans('general/message.vendor_success_delete'));
        Session::flash('type', 'success');
        Session::flash('title', trans('general/message.delete_success'));

        return redirect()->route('vendors.index');
    }
}