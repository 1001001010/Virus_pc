<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\IsAdmin;

Auth::routes();

Route::controller(App\Http\Controllers\HomeController::class)->group(function () { 
    Route::get('/profile','profile')->name('profile');
    Route::get('/category/{category_link}','category')->name('category')->middleware(['auth']);
});
Route::controller(App\Http\Controllers\MainController::class)->group(function () { 
    Route::get('/', 'index')->name('index');
    Route::get('/delivery','delivery')->name('delivery');
    Route::get('/product/{product_id}','product')->name('product')->middleware(['auth']);
    Route::post('/product/{category_id}/search', 'search')->name('search')->middleware(['auth']);
    Route::get('/basket/{tovar_id}', 'add_basket')->name('AddBasket')->middleware(['auth']);
    Route::get('/basket', 'basket_open')->name('Basket')->middleware(['auth']);
    Route::get('/editquatity/{product_id}/{status}', 'edit_quatity')->name('EditQuantity')->middleware(['auth']);
    Route::get('/basket/delete/{position_id}', 'delete_basket')->name('deleteBasket')->middleware(['auth']);
    Route::get('/order', 'add_order')->name('AddOrder')->middleware(['auth']);
});
Route::controller(App\Http\Controllers\AdminController::class)->group(function () { 
    Route::get('/admin', 'index')->name('admin')->middleware([IsAdmin::class]);
    Route::post('/admin/product/new', 'new_product')->name('AddProduct')->middleware([IsAdmin::class]);
});