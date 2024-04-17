<?php

use App\Http\Controllers\Frontend\WebsiteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Middleware\TokenVerifyMiddleware;
// ==============================================================================================
//                                   Page Routes
// ==============================================================================================
Route::view('/', 'frontend.pages.home');
Route::view('/login',  'auth.pages.user.login-page');
Route::view('/registration', 'auth.pages.user.registration-page');
Route::view('/sendOtp', 'auth.pages.user.send-otp-page');
Route::view('/otpVerify', 'auth.pages.user.verify-otp-page');
Route::view('/resetPassword', 'auth.pages.user.reset-pass-page');
Route::view('/dashboard','frontend.pages.home')->Middleware([TokenVerifyMiddleware::class]);
Route::view('/profile',  'profile')->Middleware([TokenVerifyMiddleware::class]);



// ==============================================================================================
//                                   Api Routes
// ==============================================================================================
Route::post('registration', [UserController::class, 'userRegistration']);
Route::post('login', [UserController::class, 'userLogin']);
Route::post('sendOtp', [UserController::class, 'sendOtp']);
Route::post('verifyOtp', [UserController::class, 'verifyOtp']);
Route::post('resetPass', [UserController::class, 'resetPass'])->middleware([TokenVerifyMiddleware::class]);
Route::post('logout', [UserController::class, 'logout'])->middleware([TokenVerifyMiddleware::class]);