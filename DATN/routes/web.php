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
use App\Http\Controllers\Resident\ProductController as ResidentProductController;
use App\Events\Message;
use App\Http\Controllers\Chat\ChatController;
use App\Http\Controllers\Resident\TransactionController;
use Illuminate\Http\Request;

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
    Route::get('login',[LoginController::class,'index'])->name('login.user');
    Route::post('login',[LoginController::class,'login']);
    Route::get('/add-to-cart/{id}', [CartProductController::class, 'index']);
    Route::post('/add-to-cart/{id}',[CartProductController::class, 'addToCart']);
    Route::patch('update-cart', [CartProductController::class, 'update'])->name('update.cart');
    Route::delete('remove-from-cart', [CartProductController::class, 'remove'])->name('remove.from.cart');
    Route::get('/',[DashboardController::class,'index']);
    Route::get('/profile',[ProfileController::class,'index']);
    Route::get('/logout',[LoginController::class,'logout']);
    Route::get('/list-order', [CartProductController::class, 'listCartOrder']);

    //product resident
    Route::get('/male', [ResidentProductController::class, 'maleProduct']);
    Route::get('/sale-off',[ResidentProductController:: class, 'saleProduct']);
    Route::get('/female',[ResidentProductController:: class, 'femaleProduct']);

    //Comment
    Route::post('comment', [CartProductController::class, 'comment']);
    Route::post('like', [CartProductController::class, 'Like']);

    //Counpon

    //Transaction
    Route::post('transaction',[TransactionController::class, 'index']);
    Route::get('list-transaction',[TransactionController::class, 'listTransaction']);
   
});
Route::get('contact', [ContactController::class,'index'])->name('contact');
Route::get('password/forgot', [AuthController::class,'forgotPassword'])->name('forgot.password.from');
Route::post('password/forgot', [AuthController::class,'sendMail'])->name('forgot.password.link');
Route::get('password/reset/{token}', [AuthController::class,'showResetLink'])->name('forgot.password.form');
Route::post('/password/reset',[AuthController::class, 'resetPassword'])->name('reset.password');

//Chat-app
Route::get('/send-message-form', [ChatController::class, 'view']);
Route::post('/send-message',  [ChatController::class, 'sendMessage']);

//Admin route
Route::group(['prefix' => 'admin'], function() {   
    // Dash
    Route::get('/logout',[LoginController::class,'logout']);
    Route::get('/login', [HomeController::class,'index']);
    Route::get('/', [HomeController::class,'index'])->name('admin.index');
    Route::resource('products',ProductController::class);
    Route::resource('categories',CategoriesController::class);
    Route::resource('customers',CustomerController::class);
    Route::get('/coupons',[CouponController::class,'index']);
    Route::get('/orders',[OrderController::class,'index']);
    Route::get('/ourstaff',[OurstaffController::class,'index']);
    Route::get('/setting',[SettingController::class,'index']);
});
Route::get('del-session', function() {
    session()->flush();
});
