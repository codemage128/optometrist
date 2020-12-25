<?php

Route::middleware('api')->group(function () {
    Route::post('/customer/send-verify-code', ['uses' => 'Api\CustomerController@sendVerifyCode', 'as' => 'customer.send-verify-code']);
    Route::post('/customer/register', ['uses' => 'Api\CustomerController@register', 'as' => 'customer.register']);
    Route::get('/customer/debt/{customer_id}', ['uses' => 'Api\CustomerController@debtHistory', 'as' => 'customer.debt']);
    Route::get('/customer/history/{customer_id}/{key}', ['uses' => 'Api\CustomerController@history', 'as' => 'customer.history']);
    Route::get('/customer/debtitem/{customer_id}/{invoice_id}', ['uses' => 'Api\CustomerController@debtItemHistory', 'as' => 'customer.debtitem']);
    Route::post('/customer/login', ['uses' => 'Api\CustomerController@login', 'as' => 'customer.login']);
    Route::get('/customer/info/{customer_id}', ['uses' => 'Api\CustomerController@info', 'as' => 'customer.info']);
    Route::get('/customer/cards/{customer_id}', ['uses' => 'Api\CustomerController@cards', 'as' => 'customer.cards']);
    Route::get('/customer/profile/{customer_id}', ['uses' => 'Api\CustomerController@profile', 'as' => 'customer.profile']);
    Route::post('/customer/add-card', ['uses' => 'Api\CustomerController@addCard', 'as' => 'customer.add-card']);
    Route::post('/customer/update', ['uses' => 'Api\CustomerController@update', 'as' => 'customer.update']);
    Route::post('/customer/password', ['uses' => 'Api\CustomerController@password', 'as' => 'customer.password']);
    Route::post('/vendor/login', ['uses' => 'Api\VendorController@login', 'as' => 'vendor.login']);
    Route::get('/vendor/info/{vendor_id}', ['uses' => 'Api\VendorController@info', 'as' => 'vendor.info']);
    Route::get('/vendor/history/{vendor_id}/{key}', ['uses' => 'Api\VendorController@history', 'as' => 'vendor.history']);

    Route::post('/invoice/register', ['uses' => 'Api\InvoiceController@register', 'as' => 'invoice.register']);
    Route::post('/invoice/vendor-sticker-info', ['uses' => 'Api\InvoiceController@vendorStickerInfo', 'as' => 'invoice.vendor-sticker-info']);    
    Route::post('/invoice/register-sticker', ['uses' => 'Api\InvoiceController@registerFromSticker', 'as' => 'invoice.register-sticker']);
    Route::post('/invoice/register-barqrshow', ['uses' => 'Api\InvoiceController@registerBarQrShow', 'as' => 'invoice.register-barqrshow']);
    Route::post('/invoice/put-money', ['uses' => 'Api\InvoiceController@putMoneyInvoice', 'as' => 'invoice.put-money']);
    Route::get('/invoice/get/{invoice_no}', ['uses' => 'Api\InvoiceController@getInvoice', 'as' => 'invoice.get']);;
    Route::post('/invoice/check', ['uses' => 'Api\InvoiceController@getInvoiceForCheck', 'as' => 'invoice.check']);
    Route::post('/invoice/pay', ['uses' => 'Api\InvoiceController@payInvoice', 'as' => 'invoice.pay']);
    Route::post('/invoice/charge', ['uses' => 'Api\InvoiceController@chargeInvoiceItems', 'as' => 'invoice.charge']);
    Route::post('/invoice/first-charge', ['uses' => 'Api\InvoiceController@chargeFirstInvoiceItem', 'as' => 'invoice.first-charge']);

    Route::get('/card/get/{customer_id}/{type}', ['uses' => 'Api\CardController@getCard', 'as' => 'card.get']);
});
