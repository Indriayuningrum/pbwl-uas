<?php

namespace App\Http\Controllers;
use App\Models\Order;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Order::all();
        return view('order.index', compact('rows'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('order.create');
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
                'order_id_prdk' => 'required',
                'jumlahbarang' => 'required',
                'keterangan' => 'required',
            ],
            [
                'order_id_prdk.required' => 'Id Produk Order wajib diisi',
                'jumlahbarang.required' => 'Jumlah  Order Wajib diisi',
                'keterangn.required' => 'Keterangan Order wajib diisi',                
            ]
        );

       order::create([
            'order_id_prdk' => $request->order_id_prdk,
            'jumlahbarang' => $request->jumlahbarang,
            'keterangan' => $request->keterangan,
        ]);

        return redirect('order');
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
        $row = order::findOrFail($id);
        return view('order.edit', compact('row'));
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
                'order_id_prdk' => 'required',
                'jumlahbarang' => 'required',
                'keterangan' => 'required',
            ],
            [
                'order_id_prdk.required' => 'Id Produk Order wajib diisi',
                'jumlahbarang.required' => 'Jumlah  Order Wajib diisi',
                'keterangn.required' => 'Keterangan Order wajib diisi',                
            ]
        );

        $row = order::findOrFail($id);
        $row->update([
            'order_id_prdk' => $request->order_id_prdk,
            'jumlahbarang' => $request->jumlahbarang,
            'keterangan' => $request->keterangan,

        ]);

        return redirect('order');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = order::findOrFail($id);
        $row->delete();

        return redirect('order');
    }
}
