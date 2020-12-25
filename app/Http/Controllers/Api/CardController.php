<?php


namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Card;
use Validator;
use Stripe;
use Hash;

class CardController extends BaseController
{
    public function getCard(Request $request, $customer_id, $type)
    {
        $card = Card::whereCustomer_id($customer_id)->whereType($type)->first();

        if(!$card) {
            return $this->sendError(trans('error/message.invalid_card'), trans('error/message.invalid_card_message'));
        }

        $data = array();

        $data['id'] = $card->id;
        $data['card_no'] = $card->id;
        $data['expire_month'] = $card->expire_month;
        $data['expire_year'] = $card->expire_year;
        $data['cvc'] = $card->cvc;
        
        return $this->sendResponse($data, trans('general/message.invoice_register_success'));
    }
}