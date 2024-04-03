<?php

use App\Http\Controllers\register;
use Illuminate\Support\Facades\Route;
use App\Models\Customer;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/',function(){
    return view('homePage');
});
Route::get('/register',[register::class,'index']);
Route::post('/register',[register::class,'register'])->name('register1');
// Route::get('/customer',function(){         //This is when the customer function is called then the data is printed which is present in the database
//     $customer = Customer::all();
//     echo "<pre>";
//     print_r($customer->toArray());
// });
// Route::get('/customer',[register::class,'index']);
// Route::post('/customer',[register::class,'store']);

// Route::get('/customer/view',[register::class,'view'])->name('customer-view');
Route::get('/customer/view',[register::class,'view']);
Route::get('/customer/delete/{id}',[register::class,'delete'])->name('customer-delete');
Route::get('/customer/update/{id}',[register::class,'update'])->name('customer-update');
Route::post('/customer/edit/{id}',[register::class,'edit'])->name('customer-edit');