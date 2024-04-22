<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\UjianController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BackupController;
use App\Http\Controllers\KelasController;

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
//halaman peserta
Route::get('/peserta', [PesertaController::class, 'index']);
Route::get('/peserta/tambah', [PesertaController::class, 'tambah']);
Route::post('/peserta/store', [PesertaController::class, 'store']);
Route::get('/peserta/edit/{id_peserta}', [PesertaController::class, 'edit']);
Route::post('/peserta/update', [PesertaController::class, 'update']);
Route::get('/peserta/hapus/{id_peserta}', [PesertaController::class, 'hapus']);
Route::get('/peserta/hapus_semua', [PesertaController::class, 'hapus_s']);
Route::post('/peserta/import', [PesertaController::class, 'import'])->name('peserta.import');
Route::get('/peserta/export', [PesertaController::class, 'export'])->name('peserta.export');

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('index');
//setting
Route::get('/pengaturan', [SettingController::class, 'index']);
Route::get('/pengaturan_tambah', [SettingController::class, 'create']);
Route::post('/pengaturan/store', [SettingController::class, 'store']);
Route::get('/pengaturan_edit/{id_setting}', [SettingController::class, 'edit']);
Route::post('/pengaturan/update', [SettingController::class, 'update']);
?>
