<?php

namespace App\Http\Controllers;

use App\Produk;
use Illuminate\Support\Str;
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
        //
        $dbbarang = Produk::all();
        return view('produk/index', compact('dbbarang'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('produk/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $status = 0;
        // if ($request->status) {
        //     # code...
        //     $status = 1;
        // }
        // $is_featured = 0;
        // if ($request->is_featured) {
        //     # code...
        //     $is_featured = 1;
        // }
        // $is_available = 0;
        // if ($request->is_available) {
        //     # code...
        //     $is_available = 1;
        // }
        $sub = 'sub_cat';
        $random = Str::random(20);
        $id_Sub = $sub . $random;

        $dbbarang = new Produk();
        $dbbarang->id = $id_Sub;
        $dbbarang->nama_brg = $request->nama_brg;
        $dbbarang->kodesub = $request->kodesub;
        $dbbarang->kodesat = $request->kodesat;
        $dbbarang->kodekat = $request->kodekat;
        $dbbarang->jumlah = $request->jumlah;


        $dbbarang->save();
        return redirect()->route('produk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show(Produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit(Produk $produk)
    {
        // return $produk->id;
        //
        $dbbarang = Produk::findOrFail($produk->id);
        return view('produk/edit', compact('dbbarang'));
        // return redirect()->route('produk.edit', compact('dbbarang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dbbarang = $request->validate([
            'nama_brg' => 'required',
            'kodesub' => 'required',
            'kodesat' => 'required',
            'kodekat' => 'required',
            'jumlah' => 'required',
        ]);
        Produk::whereId($id)->update($dbbarang);
        return redirect()->route('produk.index')->with('sukses', 'berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy($produk)
    {
        //
        Produk::destroy($produk);
        return redirect()->back()->with('produk', 'hapus sukses');
    }
}