<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('customer', 'CustomerController');
Route::resource('shopowner', 'ShopOwnerController');
Route::resource('product', 'ProductController');
Route::resource('deliveryman', 'DeliveryManController');

Route::get('/admin', 'AdminController@index')->name('admin.dashboard');
Route::get('/admin/customers', 'AdminController@customers')->name('admin.customers');
Route::get('/admin/products', 'AdminController@products')->name('admin.products');
Route::get('/admin/shopowners','AdminController@shopowners')->name('admin.shopowners');
Route::get('/admin/deliveryman','AdminController@deliveryman')->name('admin.deliveryman');
// Route::get('/admin/doctors','AdminController@doctors')->name('admin.doctors')->middleware('isAdmin');


// Route::post('/admin/appointments', 'AppointmentController@approve')->name('appointment.approve')->middleware('isAdmin');