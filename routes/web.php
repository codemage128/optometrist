<?php

Auth::routes();

Route::group(['middleware' => 'web', 'namespace' => 'Auth'], function () {
    Route::get('/verify/user/{token}', 'RegisterController@verify')->name('verify');
    Route::get('/verify/logout', 'RegisterController@verifyLogout')->name('verifyLogout');
    Route::get('/admin/logout', 'RegisterController@adminLogout')->name('adminLogout');

});

Route::group(['middleware' => 'admin'], function () {
    Route::get('/', 'SiteController@index')->name('home');

    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

    Route::get('/customers', 'CustomerController@index')->name('customers.index');
    Route::get('/customers/create', 'CustomerController@create')->name('customers.create');
    Route::post('/customers/store', 'CustomerController@store')->name('customers.store');
    Route::get('/customers/edit/{id}', 'CustomerController@edit')->name('customers.edit');
    Route::post('/customers/update/{id}', 'CustomerController@update')->name('customers.update');
    Route::get('/customers/delete/{id}', 'CustomerController@delete')->name('customers.delete');
    Route::get('/customers/report', 'CustomerController@report')->name('customers.report');

    Route::get('/vendors', 'VendorController@index')->name('vendors.index');
    Route::get('/vendors/create', 'VendorController@create')->name('vendors.create');
    Route::post('/vendors/store', 'VendorController@store')->name('vendors.store');
    Route::get('/vendors/delete/{id}', 'VendorController@delete')->name('vendors.delete');
    Route::get('/vendors/edit/{id}', 'VendorController@edit')->name('vendors.edit');
    Route::post('/vendors/update/{id}', 'VendorController@update')->name('vendors.update');

    Route::get('/invoices', 'InvoiceController@index')->name('invoices.index');
    Route::get('/invoices/notpaid', 'InvoiceController@notPaid')->name('invoices.notpaid');
    Route::get('/invoices/detail/{id}', 'InvoiceController@detailInvoice')->name('invoices.detail');

    Route::get('/vendor_invoices', 'VendorInvoiceController@index')->name('vendor_invoices.index');
    Route::get('/vendor_invoices/notpaid', 'VendorInvoiceController@notPaid')->name('vendor_invoices.notpaid');
    Route::get('/vendor_invoices/send/{id}', 'VendorInvoiceController@send')->name('vendor_invoices.send');
});
