<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\IsAdmin;

Auth::routes();

Route::controller(App\Http\Controllers\HomeController::class)->group(function () { 
    Route::get('/profile','profile')->name('profile');
    Route::get('/category/{category_link}','category')->name('category');
});
Route::controller(App\Http\Controllers\MainController::class)->group(function () { 
    Route::get('/', 'index')->name('index');
    Route::get('/delivery','delivery')->name('delivery');
    Route::get('/product/{product_id}','product')->name('product');
});
Route::controller(App\Http\Controllers\AdminController::class)->group(function () { 
    Route::get('/admin', 'index')->name('admin')->middleware([IsAdmin::class]);
    Route::post('/admin/product/new', 'new_product')->name('AddProduct')->middleware([IsAdmin::class]);
});