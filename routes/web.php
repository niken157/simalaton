<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\DetailController;


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

Route::get('/ttd', function () {
    return view('ttd');
});
//backup
Route::get('/backup', [BackupController::class, 'index']);
Route::get('/backup-database', [BackupController::class, 'backup']);
//halaman produk
Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/produk/tambah', [ProdukController::class, 'tambah']);
Route::post('/produk/store', [ProdukController::class, 'store']);
Route::get('/produk/edit/{id_produk}', [ProdukController::class, 'edit']);
Route::post('/produk/update', [ProdukController::class, 'update']);
Route::get('/produk/hapus/{id_produk}', [ProdukController::class, 'hapus']);
Route::get('/produk/hapus_semua', [ProdukController::class, 'hapus_s']);
//halaman pemesanan
Route::get('/pemesanan', [PemesananController::class, 'index']);
Route::get('/pemesanan/tambah', [PemesananController::class, 'tambah']);
Route::post('/pemesanan/store', [PemesananController::class, 'store']);
Route::get('/pemesanan/edit/{id_penjualan}', [PemesananController::class, 'edit']);
Route::post('/pemesanan/update', [PemesananController::class, 'update']);
Route::get('/pemesanan/hapus/{id_penjualan}', [PemesananController::class, 'hapus']);
Route::get('/pemesanan/hapus_semua', [PemesananController::class, 'hapus_s']);
//halaman penjualan
Route::get('/penjualan', [PenjualanController::class, 'index']);
Route::get('/penjualan/tambah', [PenjualanController::class, 'tambah']);
Route::post('/penjualan/store', [PenjualanController::class, 'store']);
Route::get('/penjualan/edit/{id_penjualan}', [PenjualanController::class, 'edit']);
Route::post('/penjualan/update', [PenjualanController::class, 'update']);
Route::get('/penjualan/hapus/{id_penjualan}', [PenjualanController::class, 'hapus']);
Route::get('/penjualan/hapus_semua', [PenjualanController::class, 'hapus_s']);
Route::get('/detail/{nomer_penjualan}', [PenjualanController::class, 'detailshow']);
//halaman riwayat
Route::get('/riwayat', [RiwayatController::class, 'index']);
Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('index');
?>
