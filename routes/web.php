<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FuelController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\CuponController;

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

//Route::get('/', function () {
    //return view('frontend/index');
//});

Auth::routes();

Route::get('/', [FrontendController::class, 'main']);
Route::get('/veiwdetails/{id}', [FrontendController::class, 'veiwdetails']);
Route::get('/shop', [FrontendController::class, 'shop']);
Route::get('/home', [HomeController::class, 'index'])->name('home');


//User
Route::get('/viewuser',[UserController::class,'list']);
Route::get('/adduser',[UserController::class,'add']);
Route::post('/users/insert',[UserController::class,'insert']);

//Fuel
Route::get('/addfuel',[FuelController::class,'index']);
Route::post('/fuel/insert',[FuelController::class,'insert']);
Route::get('/viewfuel',[FuelController::class,'list']);
Route::get('/fuel/delete/{delete_fuel_id}',[FuelController::class,'delete']);
Route::get('/fuel/edit/{edit_fuel_id}',[FuelController::class,'edit']);
Route::post('/fuel/update',[FuelController::class,'update']);

//Cart
Route::post('/addto/cart',[CartController::class,'addtocart']);
Route::get('/delete/cart/{cart_id}',[CartController::class,'delete']);
Route::get('/cart',[CartController::class,'cart']);
Route::post('/cart/update',[CartController::class,'cartupdate']);
Route::get('/cart/{cupon_name}',[CartController::class,'cart']);

Route::post('/order/confirm',[CartController::class,'order']);

//order
Route::get('/vieworder',[CartController::class,'vieworder']);
Route::get('/order/delete/{id}',[CartController::class,'deleteorder']);
Route::get('/viewadminorder',[CartController::class,'viewadminorder']);
Route::get('/detailsview/{id}',[CartController::class,'detailsview']);
Route::post('/statusupdate/{id}',[CartController::class,'statusupdate']);


//Invoice
Route::get('/invoice/{id}',[CartController::class,'invoice']);
//Invoice Send Mail
Route::get('/invoice/send/{id}',[CartController::class,'invoicesendmail']);

//Cupon
Route::get('/cupon',[CuponController::class,'cupon']);
Route::post('/cupon/insert',[CuponController::class,'insert']);
Route::get('/coupon/delete/{id}',[CuponController::class,'delete']);


//CheckOut
Route::get('/checkout', [FrontendController::class, 'checkout']);


//Stock
Route::get('/stock', [StockController::class, 'list']);







