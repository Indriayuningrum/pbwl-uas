@extends('layouts.app')

@section('content')
    <div class="container">
<a class="btn btn-danger btn-sm float-end" href="{{ url('home') }}">Kembali</a>
        <h3>Tambah Data Pesanan</h3>
        <form action="{{ url('/pesanan') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Id Produk</label>
                <input type="text" class="form-control" name="order_id_prdk">
            </div>
            <div class="mb-3">
                <label>Jumlah Barang</label>
                <input type="text" class="form-control" name="jumlahbarang">
            </div>
            <div class="mb-3">
                <label>Keterangan</label>
                <input type="text" class="form-control" name="keterangan">
            </div>
            <div class="mb-3">
                <input type="submit" value="SIMPAN">
            </div>
        </form>
    </div>
@endsection
