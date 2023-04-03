<?php


use App\Http\Controllers\loginauthcontroller;
use App\Http\Controllers\ordercontroller;
use App\Http\Controllers\productController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;





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

/*login auth*/
Route::get('/login', [loginauthcontroller::class,'login']);
Route::get('/register', [loginauthcontroller::class,'register']);
Route::post('/register-user',[loginauthcontroller::class,'registerUser'])->name('register-user');
Route::post('/login-user',[loginauthcontroller::class,'loginUser'])->name('login-user');


Route::get('/success', function () {
    return view('auth.registration-success');
});




  
Route::get('/dash', function () {
    return view('dash.dashboard');
});







Route::get('/use', [productController::class, 'userbooking']);
Route::get('/', [productController::class, 'userbooking']);



Route::get('product.proform', [productController::class, 'pro_create']);

Route::Post('/product', [productController::class, 'pro_store'])->name('pro');
Route::get('product.product', [productController::class, 'pro']);


Route::get('delete/{id}', [productController::class, 'delete']);
Route::get('edit/{id}', [productController::class, 'edit']);
Route::put('update/{id}',[productController::class, 'updates'])->name('update');
Route::get('orderform/{id}', [ordercontroller::class, 'orderform']);
Route::post('/order', [ordercontroller::class, 'store'])->name('order');
Route::get('orders.order', [ordercontroller::class, 'order']);
