<?php


namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Vendor;
use App\VendorProfile;
use App\Invoice;
use Validator;
use Hash;

class VendorController extends BaseController
{
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

        $vendor = Vendor::where('name', $request->name)->first();

        if (!$vendor) {
            return $this->sendError(trans('error/message.invalid_certification'), trans('error/message.invalid_name'));
        }

        if (Hash::check($request->password, $vendor->password)) {
            if($vendor->active < 1) {
                return $this->sendError(trans('error/message.account_not_active'), trans('error/message.account_not_active_message'));
            }

            $vendor->profile->device_type = $request->device_type;
            $vendor->profile->device_token = $request->device_token;
            $vendor->profile->save();

            $data = array();

            $data['vendor_id'] = $vendor->id;

            return $this->sendResponse($data, trans('general/message.vendor_register_success'));
        } else {
            return $this->sendError(trans('error/message.invalid_certification'),  trans('error/message.invalid_name'));
        }
    }


    public function info(Request $request, $vendor_id) {
        $vendor = Vendor::find($vendor_id);

        if (!$vendor) {
            return $this->sendError(trans('error/message.invalid_vendor'), trans('error/message.invalid_vendor_message'));
       } 

        $data = array();
        
        $data['balance'] = number_format($vendor->profile->balance, 2, '.', '');  
        $data['active'] = $vendor->active;
        $data['store_name'] = $vendor->profile->store_name;
        $data['store_location'] = $vendor->profile->store_location;
        $data['avatar'] = $vendor->profile->avatar;

        $data['last4History'] = $vendor->getLast4History();

        return $this->sendResponse($data, trans('general/message.vendor_info_success'));
    }

    public function history(Request $request, $vendor_id, $key)
    {
        $vendor = Vendor::find($vendor_id);

        if (!$vendor) {
            return $this->sendError(trans('error/message.invalid_vendor'), trans('error/message.invalid_vendor_message'));
        }

        $data = array();

        $data['historyList'] = $vendor->getHistory($key);

        return $this->sendResponse($data, trans('general/message.vendor_history_success'));
    }
}