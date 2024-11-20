<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PelangganController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\DataCollector\RouterDataCollector;

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

Route::get('/', function () {
    return view('Index');
});

Route::get('/login', function () {
    return view('user/login');
});

Route::get('/register', function () {
    return view('user/register');
});

Route::get('/forgot', function () {
    return view('user/forgot');
});

Route::get('/kasir', function () {
    return view('kasir');
});

Route::get('/transaksi', function () {
    return view('transaksi');
});

Route::controller(KategoriController::class)->prefix('kategori')->group(function () {
    Route::get('', 'index')->name('kategori');
    Route::post('store', 'store')->name('kategori.store');
    Route::put('update/{id}', 'update')->name('kategori.update');
    Route::delete('destroy/{id}', 'destroy')->name('kategori.destroy');
});
Route::controller(PelangganController::class)->prefix('pelanggan')->group(function() {
    Route::get('', 'index')->name('pelanggan');
    Route::post('store', 'store')->name('pelanggan.store');
    Route::put('update/{id}', 'update')->name('pelanggan.update');
    Route::delete('destroy/{id}', 'destroy')->name('pelanggan.destroy');
});
Route::controller(BarangController::class)->prefix('barang')->group(function () {
    Route::get('', 'index')->name('barang');
    Route::post('store', 'store')->name('barang.store');
    Route::put('update/{id}', 'update')->name('barang.update');
    Route::delete('destroy/{id}', 'destroy')->name('barang.destroy');
});



























