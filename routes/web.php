<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{BannerController, HomeController, FrontendController, BackendController};
use Illuminate\Support\Facades\Auth;

Auth::routes();

// HomeController Start
Route::get('/home', [HomeController::class, 'index'])->name('home');
// FrontendController Start
Route::get('/', [FrontendController::class, 'portfolio'])->name('portfolio');
// BackendController Start
Route::resource('backend', BackendController::class);
// BannerController Start
Route::resource('banner', BannerController::class);
