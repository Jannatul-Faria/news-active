<?php

use App\Http\Controllers\Admin\AdminUserController;
use App\Models\Country;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Middleware\TokenVerifyMiddleware;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SubscribeController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Frontend\WebsiteController;


// ==============================================================================================
//                                   web Routes
// ==============================================================================================
Route::name('web')->controller(WebsiteController::class)->group(function () {
    Route::view('/', 'frontend.pages.home');
});





// ==============================================================================================
//                                   admin Routes
// ==============================================================================================
Route::name('admin.')->prefix('admin')->group(function () {
    Route::view('/', 'backend.pages.dashboard');
    Route::resource('user', AdminUserController::class);
    Route::resource('blog', BlogController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('contact', ContactController::class);
    Route::resource('country', CountryController::class);
    Route::resource('news', NewsController::class);
    Route::resource('page', PageController::class);
    Route::resource('setting', SettingController::class);
    Route::resource('subscribe', SubscribeController::class);
    Route::resource('tag', TagController::class);
    

});



require __DIR__ . '/auth.php';