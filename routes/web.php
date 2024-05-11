<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RedirectController;


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
//  jika user belum login
Route::group(['middleware' => 'guest'], function() {
    Route::get('/', [AuthController::class, 'login'])->name('login');
    Route::post('/', [AuthController::class, 'dologin']);

});

// untuk superadmin dan pegawai
Route::group(['middleware' => ['auth', 'checkrole:1,2']], function() {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/redirect', [RedirectController::class, 'cek']);
});


// untuk superadmin
Route::group(['middleware' => ['auth', 'checkrole:1']], function() {
    Route::get('/superadmin', [HomeController::class, 'index']);
});

// untuk pegawai
Route::group(['middleware' => ['auth', 'checkrole:2']], function() {
    Route::get('/utama', [UserController::class, 'index']);

});
// Auth::routes();
// Route::get('/loginadmin', [HomeController::class, 'index']);
Route::get('/utama', [UserController::class, 'index']);
//halaman produk
Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/produkk', [ProdukController::class, 'utama']);
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
Route::post('/penjualan/store', [PenjualanController::class, 'store']);
Route::get('/penjualan/edit/{id_penjualan}', [PenjualanController::class, 'edit']);
Route::post('/penjualan/update', [PenjualanController::class, 'update']);
Route::get('/penjualan/hapus/{id_penjualan}', [PenjualanController::class, 'hapus']);
Route::get('/penjualan/hapus_kelompok/{nomer_penjualan}', [PenjualanController::class, 'hapus_s']);
Route::get('/detail/{nomer_penjualan}', [PenjualanController::class, 'detailshow']);
Route::get('/detail/selesai/{nomer_penjualan}', [PenjualanController::class, 'updateData']);
Route::get('/detail/nota/{nomer_penjualan}', [PenjualanController::class, 'cetak']);
//halaman riwayat
Route::get('/riwayat', [RiwayatController::class, 'index']);
Route::get('/riwayatt/{nomer_penjualan}', [RiwayatController::class, 'detail']);
Route::get('/riwayatt/nota/{nomer_penjualan}', [PenjualanController::class, 'cetak']);

?>
