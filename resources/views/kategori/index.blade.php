@extends('layouts.app')

@section('content')

<div class = "container">

    <h3> 
        Daftar Kategori
        <a class="btn btn-primary btn-sm float-end" href="{{ url('kategori/create') }}">Tambah Data</a>
    </h3>

    <table class ="table table-bordered">
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
        @foreach($rows as $row)
        <tr>
        <td>{{ $row->kat_id }}</td>
        <td>{{ $row->kat_name }}</td>
        <td><a href="{{ url('kategori/' . $row->kat_id . '/edit') }}">Edit</a></td>
                    <td>
                        <form action="{{ url('kategori/' . $row->kat_id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button>Hapus</button>
        </tr>
        @endforeach

    </table>


</div>
@endsection