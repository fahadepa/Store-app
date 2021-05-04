<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;

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
/*--------------------------------------------------------------------------
|Customer Routes
|--------------------------------------------------------------------------*/
Route::get('getallcustomers', [CustomerController::class, 'index'])->name('allcustomers');
Route::get('customer/{id}',[CustomerController::class,'first_customer'])->name('getcustomer');
Route::get('deletecustomer/{id}',[CustomerController::class,'delete_customer'])->name('deletecustomer');
Route::get('addCustomerForm', [CustomerController::class, 'addCustomerForm'])->name('addCustomerForm');
Route::post('save_cusomter', [CustomerController::class, 'addcustomer'])->name('saveCustomer');
/*--------------------------------------------------------------------------
| Product Route
|--------------------------------------------------------------------------*/
Route::get('getallproducts', [ProductController::class, 'index']);
Route::get('products/{id}',[ProductController::class,'get_product']);
Route::get('deleteproduct/{id}',[ProductController::class,'delete_product']);
/*--------------------------------------------------------------------------
| sales Route
|--------------------------------------------------------------------------*/
Route::get('getallsales', [SaleController::class, 'index']);
Route::get('sales/{id}',[SaleController::class,'get_sale']);
Route::get('deletsale/{id}',[SaleController::class,'delete_sale']);
Route::get('addsales', [SaleController::class, 'saleview'])->name('saleview');
Route::post('save_sales', [SaleController::class, 'salesrequest'])->name('savesales');
