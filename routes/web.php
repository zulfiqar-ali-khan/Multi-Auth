<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CustomerController;

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





// For User || Admin routes

 // User || Admin Routes 
 Route::resource('user',UserController::class);

 // Routes For Authenticated User \\ Admin
 Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('customerdelete/{id}', [CustomerController::class,'delete'])->name('customerdelete');

     
 }); 










// For Group Prefix Customer
Route::group(['prefix' =>'customer'], function(){

    // Customer Routes 
    Route::resource('customer',CustomerController::class);

    Route::post('signin', [CustomerController::class,'login'])->name('customer.signin');


    Route::get('customerlogin', function(){
        return view('customer.login');
    })->name('customerlogin');


    // Routes For Authenticated Customer
    Route::group(['middleware' => ['customer.auth']], function () {


        Route::get('customerdash',function(){
            return view('customer_home');
        })->name('customerdash');


    }); 

});