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
        //->orderBy('nama_produk', 'ASC')
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
            'nama_produk' => 'required|unique:produk|max:50',
            'stok' => 'required',
            'lebar' => 'required',
			'tinggi' => 'required',
			'harga' => 'required',
            'created_at' => 'required',
            'updated_at' => 'required',
        ]);
        if ($validator->fails()) {
            return back()->withInput($request->all())->withErrors($validator);
        }
		// insert data ke table produk
		DB::table('produk')->insert([
			'nama_produk' => $request->nama_produk,
			'stok' => $request->stok,
			'lebar' => $request->lebar,
			'tinggi' => $request->tinggi,
            'harga' => $request->harga,
            'created_at' => $request->created_at,
            'updated_at' => $request->updated_at
		]);
		return redirect('/produk');
	}
	public function edit($id_produk)
	{
		// mengambil data produk berdasarkan id yang dipilih
		$produk = DB::table('produk')->where('id_produk',$id_produk)->first();
		// passing data produk yang didapat ke view edit.blade.php
		return view('produk.edit_produk',['produk' => $produk]);
	}
	// update data produk
	public function update(Request $request)
	{
		// update data produk
		DB::table('produk')->where('id_produk',$request->id_produk)->update([
			'nis' => $request->nis,
			'nama_produk' => $request->nama_produk,
			'kelas' => $request->kelas,
			'jenis_kelamin' => $request->jenis_kelamin,
			'agama' => $request->agama,
            'created_at' => $request->created_at,
            'updated_at' => $request->updated_at
		]);
		return redirect('/produk');
	}
	// method untuk hapus data produk
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
