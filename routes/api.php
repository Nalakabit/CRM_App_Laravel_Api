<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::get('customers',[App\Http\Controllers\CustomerController::class, 'customers']);

Route::get('get_customer/{id}',[App\Http\Controllers\CustomerController::class, 'getCustomer']);

Route::post('save_customer',[App\Http\Controllers\CustomerController::class, 'saveCustomer']);

Route::delete('delete_customer/{id}',[App\Http\Controllers\CustomerController::class, 'deleteCustomer']);

Route::post('update_customer/{id}',[App\Http\Controllers\CustomerController::class, 'updateCustomer']);
