
@extends('template')

@section('content')
<style>
    .upper { text-transform: uppercase; }
</style>
    <h1 class="mt-4">SISTEM PENJUALAN CIPTO BETON</h1>
    <br>
    {{-- <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"></li>
    </ol> --}}
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">Jumlah Produk <span style="float: right"><h2><p><b> 8</h2></b></p></div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="/peserta">Lihat Detail</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">Jumlah Pesanan <span style="float: right"><h2><b><p>5</h2></b></div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="/ruangan">Lihat Detail</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">Jumlah Penjualan <span style="float: right"><h2><b><p>16</b></h2></div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="/sesi">Lihat Detail</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-danger text-white mb-4">
                <div class="card-body">Riwayat Penjualan <span style="float: right"><h2><b><p>45</h2></b></div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="/ruangan">Lihat Detail</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Pemesanan Produk
        </div>
        <div class="card-body">
            <table class="table table-striped table-hover" id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pembeli</th>
                        <th>Produk</th>
                        <th>Jumlah</th>
                        <th>No HP</th>
                        <th>Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp
                    @foreach($penjualan as $u)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td><p class="upper">{{ $u->nama_pembeli }}</p></td>
                            <td>{{ $u->nama_produk }} | {{ $u->lebar }}X{{ $u->tinggi }}</td>
                            <td>{{ $u->jumlah}}</td>
                            <td>{{ $u->no_hp}}</td>
                            <td>{{ $u->alamat}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
