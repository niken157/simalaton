@extends('template')

@section('content')
<br>
<div class="card">
    <div class="card-header">
        <h3>FORM TAMBAH DATA PRODUK</h3>
      </div>
    <div class="card-body">
    <form action="/produk/store" method="post">
        {{ csrf_field() }}
        <div class="row">
    <div class="col">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">NAMA PRODUK</label>
            <input name="nama_produk" type="text" class="form-control @error('nama_produk') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Masukkan nama produk " value="{{ old('nama_produk') }}" required>
            @error('nama_produk')
                <span class="invalid-feedback" role="alert">
                <strong>{{$message}}</strong>
                </span>
            @enderror
        </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">LEBAR</label>
                    <input name="lebar" type="text" class="form-control @error('lebar') is-invalid" id="exampleFormControlInput1" value="{{ old('lebar') }}" required>
                </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">TINGGI</label>
                            <input name="tinggi" type="text" class="form-control @error('tinggi') is-invalid" id="exampleFormControlInput1" value="{{ old('tinggi') }}" required>
                        </div>
                            </div>
                </div>
        <div class="row">
    <div class="col">
         <div class="mb-3">
            <label for="keterangan">JENIS KELAMIN:</label>
            <select name="jenis_kelamin" required="reqired" class="form-select" id="jenis_kelamin">
            <option value="Perempuan">Perempuan</option>
            <option value="Laki-Laki">Laki-Laki</option>
            </select>
        </div>
            </div>
        </div>
        <div class="row">
    <div class="col">
        </div>
        </div>
        <input type="hidden" name="created_at" value="<?php echo date('Y-m-d h:i:s'); ?>">
        <input type="hidden" name="updated_at" value="<?php echo date('Y-m-d h:i:s'); ?>">
        <input type="submit" value="SIMPAN DATA" class="btn btn-primary">
    </form>
    </div>
</div>
@endsection
