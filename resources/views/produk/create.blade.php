@extends('layouts.app')

@section('content')
    <div class="container">
<a class="btn btn-danger btn-sm float-end" href="{{ url('home') }}">Kembali</a>
        <h3>Tambah Data Produk</h3>
        <form action="{{ url('/produk') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Id Kategori</label>
                <input type="text" class="form-control" name="produk_id_kat">
            </div>
            <div class="mb-3">
                <label>Nama Produk</label>
                <input type="text" class="form-control" name="namaproduk">
            </div>
            <div class="mb-3">
                <label>Harga Produk</label>
                <input type="text" class="form-control" name="harga_produk">
            </div>
            <div class="mb-3">
                <label>Deskripsi Produk</label>
                <input type="text" class="form-control" name="deskripsi_produk">
            </div>
            <div class="mb-3">
                <input type="submit" value="SIMPAN">
            </div>
        </form>
    </div>
@endsection
