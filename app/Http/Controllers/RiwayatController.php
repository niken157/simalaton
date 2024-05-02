<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class RiwayatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $penjualan = DB::table('penjualan')
                     ->join('produk', 'penjualan.id_produk', '=', 'produk.id_produk')
                     ->where('keterangan', 'selesai')
                    ->get();
        return view('riwayat',['penjualan' => $penjualan]);
    }

}
