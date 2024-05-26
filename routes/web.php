<?php

use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\Users\LoginController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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


// Users
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('products/{id}-{slug}.html', [App\Http\Controllers\ProductController::class, 'index']);

Route::post('add-cart', [App\Http\Controllers\CartController::class, 'index']);
Route::get('carts', [App\Http\Controllers\CartController::class, 'show']);
Route::post('update-cart', [App\Http\Controllers\CartController::class, 'update']);
Route::get('carts/delete/{id}', [App\Http\Controllers\CartController::class, 'remove']);
Route::post('carts', [App\Http\Controllers\CartController::class, 'addCart']);

// Admin
Route::get('admin/users/login', [LoginController::class, 'index'])->name('login');
Route::post('admin/users/login/store', [LoginController::class, 'store']);

Route::middleware(['auth'])->group(function (){

    Route::prefix('admin')->group(function (){

        Route::get('/', [MainController::class, 'index'])->name('admin');

            #Product
            Route::prefix('products')->group(function () {
                Route::get('add', [ProductController::class, 'create']);
                Route::post('add', [ProductController::class, 'store'])->name('products.store');
                Route::get('list', [ProductController::class, 'index']);
                Route::get('edit/{product}', [ProductController::class, 'show']);
                Route::post('edit/{product}', [ProductController::class, 'update']);
                Route::DELETE('destroy', [ProductController::class, 'destroy']);
                Route::get('export', [ProductController::class, 'export'])->name('export');
            });

            #Upload
            Route::post('upload/services', [\App\Http\Controllers\Admin\UploadController::class, 'store']);

            #Cart
            Route::get('customers', [\App\Http\Controllers\Admin\CartController::class, 'index']);
            Route::get('customers/view/{customer}', [\App\Http\Controllers\Admin\CartController::class, 'show']);
            Route::DELETE('customers/destroy', [\App\Http\Controllers\Admin\CartController::class, 'destroy']);
            Route::get('customers/download/invoice/{customer}', [\App\Http\Controllers\Admin\CartController::class, 'downloadInvoice']);

            //Menu
            Route::prefix('menus')->group(function (){
            Route::get('add', [\App\Http\Controllers\Admin\MenuController::class, 'create']);
            Route::post('add', [\App\Http\Controllers\Admin\MenuController::class, 'store']);
            Route::get('list', [\App\Http\Controllers\Admin\MenuController::class, 'index']);
            Route::get('edit/{menu}', [\App\Http\Controllers\Admin\MenuController::class, 'show']);
            Route::post('edit/{menu}', [\App\Http\Controllers\Admin\MenuController::class, 'update']);
            Route::delete('destroy', [\App\Http\Controllers\Admin\MenuController::class, 'destroy']);
        });

    });
});