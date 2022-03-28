<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FuelController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\StockController;

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
    return view('frontend/index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//User
Route::get('/viewuser',[UserController::class,'list']);
Route::get('/adduser',[UserController::class,'add']);
Route::post('/users/insert',[UserController::class,'insert']);

//Fuel
Route::get('/addfuel',[FuelController::class,'index']);
Route::post('/fuel/insert',[FuelController::class,'insert']);
Route::get('/viewfuel',[FuelController::class,'list']);

//Purchase
Route::get('/addpurchase',[PurchaseController::class,'index']);
Route::post('/purchase/insert',[PurchaseController::class,'insert']);
Route::get('/viewpurchase',[PurchaseController::class,'list']);


//Sale
Route::get('/addsale',[SaleController::class,'index']);
Route::post('/sale/insert',[SaleController::class,'insert']);
Route::get('/viewsale',[SaleController::class,'list']);
Route::get('/viewdetails/{id}',[SaleController::class,'viewdetails']);


//Stock
Route::get('/viewstock',[StockCOntroller::class,'list']);



