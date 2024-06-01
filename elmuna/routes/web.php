<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\userController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\checkoutController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\TransaksiAdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [TransaksiController::class, 'index'])->name('home');
Route::POST('/addTocart', [TransaksiController::class, 'addTocart'])->name('addTocart');
Route::POST('/storePelanggan', [UserController::class, 'storePelanggan'])->name('storePelanggan');
Route::POST('/login_pelanggan', [UserController::class, 'loginProses'])->name('loginproses.pelanggan');
Route::GET('/logout_pelanggan', [UserController::class, 'logout'])->name('logout.pelanggan');

Route::get('/product', [ProductController::class, 'product'])->name('product.pelanggan');
Route::get('/transaksi', [TransaksiController::class, 'transaksi'])->name('transaksi');
Route::DELETE('/transaksi/deleteproduct/{id}', [TransaksiController::class, 'destroy'])->name('destroy.product');
Route::DELETE('/transaksi/deletecart/{id}', [TransaksiController::class, 'destroyCart'])->name('destroy.cart');

Route::get('/contact', [Controller::class, 'contact'])->name('contact');
Route::get('/about', [AboutController::class, 'about'])->name('about');

Route::get('/checkout', [checkoutController::class, 'checkout'])->name('checkout');
Route::POST('/checkout/proses', [checkoutController::class, 'prosesCheckout'])->name('checkout.product');
Route::POST('/checkout/prosesPembayaran', [checkoutController::class, 'prosesPembayaran'])->name('checkout.bayar');
Route::get('/checkOut', [checkoutController::class, 'keranjang'])->name('keranjang');
Route::get('/checkOut/{code_transaksi}', [checkoutController::class, 'bayar'])->name('keranjang.bayar');
Route::post('/checkOut/bayar', [checkoutController::class, 'prosesBayar'])->name('keranjang.bayar.proses');
Route::post('/transaksi/selesai/{code_transaksi}', [checkoutController::class, 'selesaikan']);


// Route::group(['middleware' => ['auth']], function () {
Route::get('/admin', [Controller::class, 'login'])->name('login');
Route::POST('/admin/loginProses', [Controller::class, 'loginProses'])->name('loginProses');
Route::get('/admin/logout', [Controller::class, 'logout'])->name('logout');
Route::get('/admin/dashboard', [Controller::class, 'admin'])->name('admin');
Route::get('/admin/product', [ProductController::class, 'index'])->name('product');
Route::get('/admin/report', [Controller::class, 'report'])->name('report');
Route::get('/admin/addModal', [ProductController::class, 'addModal'])->name('addModal');

Route::GET('/admin/user_management', [UserController::class, 'index'])->name('userManagement');
Route::GET('/admin/user_management/addModalUser', [UserController::class, 'addModalUser'])->name('addModalUser');
Route::POST('/admin/user_management/addData', [UserController::class, 'store'])->name('addDataUser');
Route::get('/admin/user_management/editUser/{id}', [UserController::class, 'show'])->name('showDataUser');
Route::PUT('/admin/user_management/updateDataUser/{id}', [UserController::class, 'update'])->name('updateDataUSer');
Route::DELETE('/admin/user_management/deleteUSer/{id}', [UserController::class, 'destroy'])->name('destroy.DataUser');
    
Route::post('/admin/addData', [ProductController::class, 'store'])->name('addData');
Route::GET('/admin/editModal/{id}', [ProductController::class, 'show'])->name('editModal');
Route::PUT('/admin/updateData/{id}', [ProductController::class, 'update'])->name('updateData');
Route::DELETE('/admin/deleteData/{id}', [ProductController::class, 'destroy'])->name('destroy.deleteData');

Route::GET('/admin/transaksi', [TransaksiAdminController::class, 'index'])->name('transaksi.admin');
Route::GET('/admin/transaksi/detail/{code_transaksi}', [TransaksiAdminController::class, 'detail']);
Route::POST('/admin/transaksi/proses', [TransaksiAdminController::class, 'proses']);
Route::POST('/admin/transaksi/tolak', [TransaksiAdminController::class, 'tolak']);
Route::POST('/admin/transaksi/kirim', [TransaksiAdminController::class, 'kirim']);
// });