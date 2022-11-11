<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\OurstaffController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Resident\ProfileController;
use App\Http\Controllers\Resident\CartProductController;


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



Route::middleware(['web'])->group(function () {
    Route::get('register',[RegisterController::class,'index']);
    Route::post('register',[RegisterController::class,'store']);
    Route::get('login',[LoginController::class,'index']);
    Route::post('login',[LoginController::class,'login']);
    Route::get('/cart/{id}', [CartProductController::class, 'index']);
    Route::get('add-to-cart/{id}', [CartProductController::class, 'addToCart']);
    Route::patch('update-cart', [CartProductController::class, 'update'])->name('update.cart');
    Route::delete('remove-from-cart', [CartProductController::class, 'remove'])->name('remove.from.cart');
    Route::get('/',[DashboardController::class,'index']);
    Route::get('/profile',[ProfileController::class,'index']);
    Route::get('logout',[LoginController::class,'logout']);
});
Route::get('contact', [ContactController::class,'index'])->name('contact');
Route::get('forgotpassword', [AuthController::class,'forgotPassword'])->name('forgotpassword');

//Admin route
Route::group(['prefix' => 'admin'], function() {   
    // Dash
    Route::get('/login', [HomeController::class,'index'])->name('admin.index');
    Route::get('/', [HomeController::class,'index'])->name('admin.index');
    Route::resource('products',ProductController::class);
    Route::resource('categories',CategoriesController::class);
    Route::resource('customers',CustomerController::class);
    Route::get('/coupons',[CouponController::class,'index']);
    Route::get('/orders',[OrderController::class,'index']);
    Route::get('/ourstaff',[OurstaffController::class,'index']);
    Route::get('/setting',[SettingController::class,'index']);
});

// Route::get('set-session', function () {
//     session()->put('name', 'trantrungih');
// });
// Route::get('get-session', function() {
//     echo session('name');
// });
Route::get('del-session', function() {
    session()->flush();
});
