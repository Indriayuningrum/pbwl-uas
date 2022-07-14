@extends('layouts.app')

@section('content')

<div class = "container">

    <h3> 
        Daftar Pesanan
        <a class="btn btn-primary btn-sm float-end" href="{{ url('order/create') }}">Tambah Data</a>
    </h3>

    <table class ="table table-bordered">
        <tr>
            <th>NO</th>
            <th>ID PRODUK</th>
            <th>JUMLAH BARANG</th>
            <th>KETERANGAN</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
        @foreach($rows as $row)
        <tr>
        <td>{{ $row->order_id }}</td>
        <td>{{ $row->order_id_prdk }}</td>
        <td>{{ $row->jumlahbarang }}</td>
        <td>{{ $row->keterangan }}</td>
        <td><a href="{{ url('order/' . $row->order_id . '/edit') }}">Edit</a></td>
                    <td>
                        <form action="{{ url('order/' . $row->order_id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button>Hapus</button>
        </tr>
        @endforeach

    </table>


</div>
@endsection