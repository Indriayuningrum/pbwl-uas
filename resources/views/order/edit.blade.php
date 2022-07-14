@extends('layouts.app')

@section('content')
    <div class="container">
<a class="btn btn-danger btn-sm float-end" href="{{ url('home') }}">Kembali</a>
        <h3>Edit Data Pesanan</h3>
        <form action="{{ url('/order/' . $row->order_id) }}" method="POST">
            @method('PATCH')
            @csrf
            <div class="mb-3">
                <label>Id Produk</label>
                <input type="text" class="form-control" name="order_id_prdk" value="{{ $row->order_id_prdk }}"></>
            </div>
            <div class="mb-3">
                <label>Jumlah barang</label>
                <input type="text" class="form-control" name="jumlahbarang" value="{{ $row->jumlahbarang }}"></>
            </div><div class="mb-3">
                <label>Keterangan</label>
                <input type="text" class="form-control" name="keterangan" value="{{ $row->keterangan }}"></>
            </div>
            <div class="mb-3">
                <input type="submit" value="UPDATE">
            </div>
        </form>
    </div>
@endsection
