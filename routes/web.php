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

Route::get('/', 'DefaultController@index')->name('home');
Route::get('/index1', 'DefaultController@index1');
Route::post('/loanstore', 'DefaultController@store')->name('loanstore');
Route::get('about-company', 'DefaultController@Company')->name('company');
Route::get('contact-us', 'DefaultController@Contacts')->name('contacts');
Auth::routes();

    Route::group(['middleware' => 'auth'], function () {
        Route::get('/home', 'HomeController@index');
        Route::resource('loan', 'LoanController');
        Route::resource('user', 'UserController');
        Route::resource('customer', 'CustomerController');
        Route::resource('partner', 'PartnerController');

    });
