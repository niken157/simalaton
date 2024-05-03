
@extends('template')

@section('content')
@include('sweetalert::alert')
<style>
    td {
        font-size: 14px;
    }
    .upper { text-transform: uppercase; }
</style>
<br>
    <div class="card mb-4">
    <div class="card-header">
            <!-- <i class="fas fa-table me-1"></i> -->
            <span style=" font-size: 1cm;">
            DATA PENJUALAN
            <span style="float: right">
            <a class="align-items-center justify-content-between btn btn-primary" href="/pemesanan/tambah" role="button"><i class="fas fa-fw fa-plus"></i> Tambah Data</a>
            <a class="align-items-center justify-content-between btn btn-danger" onclick="return confirm('Apakah Anda Yakin Menghapus Semua Data?')" href="/produk/hapus_semua" role="button"><i class="fas fa-fw fa-trash"></i> Hapus Semua</a>
        </div>
        <div class="card-body table-responsive">
            <table class="table table-striped table-hover" id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nomer Penjualan</th>
                        <th>Nama Pembeli</th>
                        <th>Total jumlah Pembelian</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp
                    @foreach($penjualan as $u)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $u->nomer_penjualan}}</td>
                            <td><p class="upper">{{ $u->nama_pembeli }}</p></td>
                            <td>0</td>
                            <td>
                                <a class="btn btn-outline-warning" href="detail/{{ $u->nomer_penjualan }}" role="button" title="Edit Data Penjualan"><i class="fas fa-search"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
