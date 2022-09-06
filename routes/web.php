<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\KklController;
use App\Http\Controllers\Admin\PengajuanController;
// old
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Frontend\WishlistController;
use App\Http\Controllers\Frontend\PembayaranController;
use App\Http\Controllers\Frontend\BuktiController;
// 
use App\Models\Kkl;
// 
use App\Models\Order;
use App\Models\Product;
use App\Models\OrderItem;
use App\Models\Category;
use App\Models\Cart;
use App\Models\User;
use App\Models\Wishlist;
use App\Models\Bukti;
// old


Route::get('/', [FrontendController::class, 'index']);
Route::get('/hasilkkl', [FrontendController::class, 'view']);

Route::get('shop', [FrontendController::class, 'shop']);
Route::get('kategori/{slug}', [FrontendController::class, 'viewkategori']);
Route::get('kategori/{kate_slug}/{prod_slug}', [FrontendController::class, 'produkview']);


Route::get('product-list', [FrontendController::class, 'productlistAjax']);
Route::post('searchproduct', [FrontendController::class, 'searchProduct']);

Auth::routes(['verify'=>true]);

Route::get('load-cart-data', [CartController::class, 'cartcount']);
Route::get('load-wishlist-count', [WishlistController::class, 'wishlistcount']);

Route::post('add-to-cart', [CartController::class, 'addProduk']);
Route::post('delete-cart-item', [CartController::class, 'deleteproduk']);
Route::post('update-cart', [CartController::class, 'updatecart']);

Route::post('add-to-wishlist', [WishlistController::class, 'add']);
Route::post('delete-wishlist-item', [WishlistController::class, 'deleteitem']);

Route::middleware(['auth'])->group(function(){

    Route::get('kkl', [KklController::class, 'kkl']);
    Route::post('pengajuan-kkl', [KklController::class, 'submitkkl']);

    Route::get('cart', [CartController::class, 'viewcart']);

    Route::get('checkout', [CheckoutController::class, 'index']);

    Route::post('city', [CheckoutController::class, 'get_city']);
    Route::post('subdistrict', [CheckoutController::class, 'get_subdistrict']);
    Route::post('ongkir', [CheckoutController::class, 'get_ongkir']);

    Route::post('place-order', [CheckoutController::class, 'placeorder']);

    Route::get('my-orders', [UserController::class, 'index']);
    Route::get('my-orders_ajax', [UserController::class, 'show_ajax']);
    Route::get('view-order/{id}', [UserController::class, 'get_token']);
    Route::post('view-order/{id}', [UserController::class, 'get_result']);
    Route::get('view-trans/{id}', [UserController::class, 'view']);

    Route::get('history', [UserController::class, 'history']);
    Route::get('history-trans/{id}', [UserController::class, 'historytrans']);
    Route::get('upload-bukti', [UserController::class, 'bukti']);
    Route::get('bukti-trans/{id}', [UserController::class, 'upload']);
    Route::put('update-bukti/{id}', [UserController::class, 'updatebukti']);
    
    Route::get('wishlist', [WishlistController::class, 'index']);
});

Route::middleware(['auth', 'isAdmin'])->group(function (){
    Route::get('/dashboard', 'Admin\FrontendController@index');
    Route::get('adm-kkl', [PengajuanController::class, 'index_kkl']);

    // old
    Route::get('Kategori', 'Admin\KategoriController@index');
    Route::get('add-kategori', 'Admin\KategoriController@add');
    Route::post('insert-kategori', 'Admin\KategoriController@insert');
    Route::get('edit-kategori/{id}', [KategoriController::class ,'edit']);
    Route::put('update-kategori/{id}', [KategoriController::class, 'update']);
    Route::get('delete-kategori/{id}', [KategoriController::class, 'destroy']);
    Route::post('import-kategori', [KategoriController::class, 'import']);
    Route::get('export-kategori', [KategoriController::class, 'export']);

    Route::get('products', [ProductController::class, 'index']);
    Route::get('add-products', [ProductController::class, 'add']);
    Route::post('insert-product', [ProductController::class, 'insert']);
    Route::get('edit-product/{id}', [ProductController::class, 'edit']);
    Route::put('update-product/{id}', [ProductController::class, 'update']);
    Route::get('delete-product/{id}', [ProductController::class, 'destroy']);
    Route::post('import-produk', [ProductController::class, 'import']);
    Route::get('export-produk', [ProductController::class, 'export']);

    Route::get('orders', [OrderController::class, 'index']);
    Route::get('admin/view-order/{id}', [OrderController::class, 'view']);
    Route::put('update-order/{id}', [OrderController::class, 'updateorder']);
    Route::get('order-history', [OrderController::class, 'orderhistory']);
    Route::get('admin/view-history/{id}', [OrderController::class, 'viewhistory']);
    Route::get('export-order', [OrderController::class, 'export']);

    Route::get('users', [DashboardController::class, 'users']);
    Route::get('view-user/{id}', [DashboardController::class, 'viewuser']);
});
