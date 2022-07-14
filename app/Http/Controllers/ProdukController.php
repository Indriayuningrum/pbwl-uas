<?php

namespace App\Http\Controllers;
use App\Models\Produk;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Produk::all();
        return view('produk.index', compact('rows'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'produk_id_kat' => 'required',
                'namaproduk' => 'required',
                'harga_produk' => 'required',
                'deskripsi_produk' => 'required',
            ],
            [
                'produk_id_kat.required' => 'Id Kategori Produk wajib diisi',
                'namaproduk.required' => 'Nama Produk Wajib diisi',
                'harga_produk.required' => 'Harga Produk wajib diisi',
                'deskripsi_produk.required' => 'Deskripsi Produk wajib diisi',                
            ]
        );

       produk::create([
            'produk_id_kat' => $request->produk_id_kat,
            'namaproduk' => $request->namaproduk,
            'harga_produk' => $request->harga_produk,
            'deskripsi_produk' => $request->deskripsi_produk,
        ]);

        return redirect('produk');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = produk::findOrFail($id);
        return view('produk.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'produk_id_kat' => 'required',
                'namaproduk' => 'required',
                'harga_produk' => 'required',
                'deskripsi_produk' => 'required',
            ],
            [
                'produk_id_kat.required' => 'Id Kategori Produk wajib diisi',
                'namaproduk.required' => 'Nama Produk Wajib diisi',
                'harga_produk.required' => 'Harga Produk wajib diisi',
                'deskripsi_produk.required' => 'Deskripsi Produk wajib diisi',   
            ]
        );

        $row = produk::findOrFail($id);
        $row->update([
            'produk_id_kat' => $request->produk_id_kat,
            'namaproduk' => $request->namaproduk,
            'harga_produk' => $request->harga_produk,
            'deskripsi_produk' => $request->deskripsi_produk,

        ]);

        return redirect('produk');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = produk::findOrFail($id);
        $row->delete();

        return redirect('produk');
    }
}
