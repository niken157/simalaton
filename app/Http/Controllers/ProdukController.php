<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;

class ProdukController extends Controller
{
	public function index()
	{
    	// mengambil data dari table produk
		$produk = DB::table('produk')
        ->orderBy('nama_produk', 'ASC')
        // ->limit(10)
        // ->offset(5)
        ->get();//menangkap
    	// mengirim data produk ke view index
		return view('produk.produk',['produk' => $produk]);//variabel passing
	}
	// method untuk menampilkan view form tambah produk
	public function tambah()
	{
		// memanggil view tambah
		return view('produk.tambah_produk');
	}
	// method untuk insert data ke table produk
	public function store(Request $request)
	{
        $validator = Validator::make($request->all(), [
            'nis' => 'required|unique:produk|integer',
            'nama_produk' => 'required|unique:produk|max:50',
            'kelas' => 'required',
			'jenis_kelamin' => 'required',
			'agama' => 'required',
            'created_at' => 'required',
            'updated_at' => 'required',
        ]);
        if ($validator->fails()) {
            return back()->withInput($request->all())->withErrors($validator);
        }
		// insert data ke table peserta
		DB::table('peserta')->insert([
			'nis' => $request->nis,
			'nama_peserta' => $request->nama_peserta,
			'kelas' => $request->kelas,
			'jenis_kelamin' => $request->jenis_kelamin,
			'agama' => $request->agama,
            'created_at' => $request->created_at,
            'updated_at' => $request->updated_at
		]);
		return redirect('/produk');
	}
	public function edit($id_produk)
	{
		// mengambil data peserta berdasarkan id yang dipilih
		$peserta = DB::table('peserta')->where('id_peserta',$id_peserta)->first();
		// passing data peserta yang didapat ke view edit.blade.php
		return view('peserta.edit_peserta',['peserta' => $peserta]);
	}
	// update data peserta
	public function update(Request $request)
	{
		// update data peserta
		DB::table('peserta')->where('id_peserta',$request->id_peserta)->update([
			'nis' => $request->nis,
			'nama_peserta' => $request->nama_peserta,
			'kelas' => $request->kelas,
			'jenis_kelamin' => $request->jenis_kelamin,
			'agama' => $request->agama,
            'created_at' => $request->created_at,
            'updated_at' => $request->updated_at
		]);
		return redirect('/peserta');
	}
	// method untuk hapus data peserta
	public function hapus($id_produk)
	{
		DB::table('produk')->where('id_produk',$id_produk)->delete();

		return redirect('/produk');
	}
    public function hapus_s()
	{
		DB::table('produk')->truncate();
        alert()->info('Berhasil Menghapus','Data Semua produk Telah Berhasil Dihapus');
		return redirect('/produk');
	}
}
?>
