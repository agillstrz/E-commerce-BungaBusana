<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\frontend\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\frontend\BayarController;
use App\Http\Controllers\frontend\CheckoutController;
use App\Http\Controllers\Frontend\FrontendController;


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




Route::get('produklist',[FrontendController::class, 'produklistajax']);
Route::post('cariproduk',[FrontendController::class, 'cariproduk']);

Route::get('/',[FrontendController::class, 'index']);
Route::get('/home',[FrontendController::class, 'index']);
Route::get('semuaproduk',[FrontendController::class, 'indexx']);
Route::get('kategori/{slug}',[FrontendController::class, 'tampilankategori']);
Route::get('kategori/{cate_slug}/{prod_slug}',[FrontendController::class, 'tampilanproduk']);


Route::post('add-to-cart', [CartController::class, 'addproduk']);
Route::post('hapus-keranjang', [CartController::class, 'hapuskeranjang']);
Route::post('update-cart', [CartController::class, 'updatecart']);




Route::middleware(['auth'])->group(function () {
    Route::get('keranjang', [CartController::class, 'viewcart']);
    Route::get('Checkout', [CheckoutController::class, 'index']);
    Route::post('place-order', [CheckoutController::class, 'placeorder']);

    Route::get('orderlist', [UserController::class, 'index']);
    Route::get('view-order/{id}', [UserController::class, 'view']);

    Route::post('proses-pembayaran', [CheckoutController::class, 'razor']);

   
});


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

 Route::middleware(['auth','isAdmin'])->group(function(){
    Route::get('/dashboard', [App\Http\Controllers\Admin\FrontendController::class, 'index']);
    Route::get('/categories', [App\Http\Controllers\Admin\CategoryController::class, 'index']);
    Route::get('/add-category', [App\Http\Controllers\Admin\CategoryController::class, 'add']);
    Route::post('insert-category', [App\Http\Controllers\Admin\CategoryController::class, 'insert']);
    Route::get('/edit-category/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'edit']);
    Route::put('/update-category/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'update']);
    Route::get('/delete-category/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'destroy']);

    Route::get('produk', [App\Http\Controllers\Admin\ProductController::class, 'index']);
    Route::get('add-produk', [App\Http\Controllers\Admin\ProductController::class, 'add']);
    Route::post('insert-produk', [App\Http\Controllers\Admin\ProductController::class, 'insert']);
    Route::get('edit-produk/{id}', [App\Http\Controllers\Admin\ProductController::class, 'edit']);
    Route::put('/update-produk/{id}', [App\Http\Controllers\Admin\ProductController::class, 'update']);
    Route::get('delete-produk/{id}', [App\Http\Controllers\Admin\ProductController::class, 'destroy']);


    Route::get('/orders', [OrderController::class, 'index']);
    Route::get('admin/view-order/{id}', [OrderController::class, 'view']);
    Route::put('update-order/{id}', [OrderController::class, 'updateorder']);
    Route::get('order-history', [OrderController::class, 'history']);

    Route::get('user-list', [DashboardController::class, 'index']);
    Route::get('view-user/{id}', [DashboardController::class, 'view']);
    
   
 });