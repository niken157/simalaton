<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\HomeController;


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

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('index');
?>
