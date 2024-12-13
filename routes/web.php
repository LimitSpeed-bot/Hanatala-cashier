<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\PenjualanDetailController;
use App\Http\Controllers\PosController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Support\Facades\Route;

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

Route::get('/forgot', function () {
    return view('user/forgot');
});

Route::get('/', function () {
    return redirect()->route('login');
});

// Rute untuk registrasi
Route::controller(RegisterController::class)->prefix('register')->group(function () {
    Route::get('', 'index')->name('register');
    Route::post('store', 'store')->name('register.store');
});

// Rute untuk login
Route::controller(LoginController::class)->prefix('login')->group(function () {
    Route::get('', 'index')->name('login');
    Route::post('store', 'store')->name('login.store');
    Route::post('logout', 'logout')->name('logout');
});

// Rute dengan middleware auth
Route::middleware(['auth'])->group(function () {
    // Dashboard
    Route::get('/index', [DashboardController::class, 'index'])->name('index');

    // Rute untuk admin
    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
        // Rute kategori
        Route::controller(KategoriController::class)->prefix('kategori')->group(function () {
            Route::get('', 'index')->name('kategori');
            Route::post('store', 'store')->name('kategori.store');
            Route::put('update/{id}', 'update')->name('kategori.update');
            Route::delete('destroy/{id}', 'destroy')->name('kategori.destroy');
        });

        // Rute pelanggan
        Route::controller(PelangganController::class)->prefix('pelanggan')->group(function () {
            Route::get('', 'index')->name('pelanggan');
            Route::post('store', 'store')->name('pelanggan.store');
            Route::put('update/{id}', 'update')->name('pelanggan.update');
            Route::delete('destroy/{id}', 'destroy')->name('pelanggan.destroy');
        });

        // Rute barang
        Route::controller(BarangController::class)->prefix('barang')->group(function () {
            Route::get('', 'index')->name('barang');
            Route::post('store', 'store')->name('barang.store');
            Route::put('update/{id}', 'update')->name('barang.update');
            Route::delete('destroy/{id}', 'destroy')->name('barang.destroy');
        });
        // Rute transaksi
        Route::controller(TransaksiController::class)->prefix('transaksi')->group(function () {
            Route::get('', 'index')->name('transaksi.index');
            Route::post('store', 'store')->name('transaksi.store');
            Route::get('barang', 'getBarang')->name('transaksi.barang');
            Route::get('riwayat', 'riwayat')->name('transaksi.riwayat');
            Route::delete('destroy/{id}', 'destroy')->name('transaksi.destroy');
        });

        Route::controller(DashboardController::class)->prefix('index')->group(function () {
            Route::get('report/cetak/{id}', 'cetak')->name('report.cetak');
            Route::get('api/transaction/{id}', 'getTransactionDetails')->name('transaction.details');
            Route::delete('transaction/{id}', 'destroy')->name('transaction.destroy');

        });

    });
});
