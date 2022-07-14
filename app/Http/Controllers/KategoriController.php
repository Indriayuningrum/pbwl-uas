<?php

namespace App\Http\Controllers;
use App\Models\Kategori;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Kategori::all();
        return view('kategori.index', compact('rows'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategori.create');
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
                'kat_name' => 'bail|required|unique:tb_kategori',
            ],
            [
                'kat_name.required' => 'Kategori wajib diisi',
                'kat_name.unique' => 'Nama Kategori sudah ada',
            ]
        );

        kategori::create([
            'kat_name' => $request->kat_name,
        ]);

        return redirect('kategori');
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
        $row = kategori::findOrFail($id);
        return view('kategori.edit', compact('row'));
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
                'kat_name' => 'bail|required',
            ],
            [
                'kat_name.required' => 'Nama Kategori wajib diisi'
            ]
        );

        $row = kategori::findOrFail($id);
        $row->update([
            'kat_name' => $request->kat_name,

        ]);

        return redirect('kategori');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = kategori::findOrFail($id);
        $row->delete();

        return redirect('kategori');
    }
}
