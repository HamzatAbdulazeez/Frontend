<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomePageController::class, 'index'])->name('index');
Route::get('about', [App\Http\Controllers\HomePageController::class, 'about'])->name('about');
Route::get('testimonials', [App\Http\Controllers\HomePageController::class, 'testimonials'])->name('testimonials');
Route::get('contact', [App\Http\Controllers\HomePageController::class, 'contact'])->name('contact');
Route::get('details', [App\Http\Controllers\HomePageController::class, 'details'])->name('details');
// registration
Route::get('register', [App\Http\Controllers\HomePageController::class, 'register'])->name('register');
Route::get('users', [App\Http\Controllers\HomePageController::class, 'users'])->name('users');
Route::get('partners', [App\Http\Controllers\HomePageController::class, 'partners'])->name('partners');
Route::get('login', [App\Http\Controllers\HomePageController::class, 'login'])->name('login');
Route::get('forgot', [App\Http\Controllers\HomePageController::class, 'forgot'])->name('forgot');
Route::get('enter', [App\Http\Controllers\HomePageController::class, 'enter'])->name('enter');
Route::get('newpassword', [App\Http\Controllers\HomePageController::class, 'newpassword'])->name('newpassword');

// Dashboard Routes
Route::get('welcome', [App\Http\Controllers\DashboardController::class, 'welcome'])->name('welcome');
Route::get('blog', [App\Http\Controllers\DashboardController::class, 'blog'])->name('blog');
Route::get('publish', [App\Http\Controllers\DashboardController::class, 'publish'])->name('publish');