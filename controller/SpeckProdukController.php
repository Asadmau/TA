<?php

namespace App\Http\Controllers;

use App\SpeckProduk;
use Illuminate\Http\Request;

class SpeckProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dbbarang = SpeckProduk::all();
        return view('speck/index', compact('dbbarang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('speck/tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $dbbarang =  $request->validate([
            'nama_spec' => 'required',
            'ketspec' => 'required',
            'kode_produk' => 'required',
        ]);

        $dbbarang = new SpeckProduk();
        $dbbarang->id = $request->id;
        $dbbarang->nama_spec = $request->nama_spec;
        $dbbarang->kode_produk = $request->kode_produk;
        $dbbarang->ketspec = $request->ketspec;


        $dbbarang->save();
        return redirect()->route('speck.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SpeckProduk  $speckProduk
     * @return \Illuminate\Http\Response
     */
    public function show(SpeckProduk $speckProduk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SpeckProduk  $speckProduk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $dbbarang = SpeckProduk::findOrFail($id);

        return view('speck/edit', compact('dbbarang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SpeckProduk  $speckProduk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $dbbarang = $request->validate([
            'nama_spec' => 'required',
            'kode_produk' => 'required',
            'ketspec' => 'required',
        ]);
        SpeckProduk::whereId($id)->update($dbbarang);

        return redirect('/speck')->with('success', 'successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SpeckProduk  $speckProduk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $dbbarang = SpeckProduk::findOrFail($id);
        $dbbarang->delete();

        return redirect('/speck')->with('success', 'Corona Case Data is successfully deleted');
    }
}