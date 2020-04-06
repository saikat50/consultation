<?php

use Illuminate\Support\Facades\Route;

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




/*
|--------------------------------------------------------------------------
| CONSULTANT ROUTES
|--------------------------------------------------------------------------
*/

Route::get('/consultant/dashboard','Consultant\DashboardController@show')->name('Consultant.Dashboard-Show');
Route::get('/consultant/dashboard/messages','MessageController@consultant_ui')->name('Consultant.Message-Ui');
Route::get('/consultant/dashboard/orders','Consultant\OrderController@show')->name('Consultant.Order-Show');
Route::get('/consultant/dashboard/order-details/{id}','Consultant\OrderController@order_details')->name('Consultant.Order-Details');
Route::get('/consultant/dashboard/services','Consultant\ServiceController@show')->name('Consultant.Service-Show');
Route::get('/consultant/dashboard/services/create/overview','Consultant\ServiceController@overview')->name('Consultant.Service-Overview');









