<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;

use App\Satuan;
use Illuminate\Http\Request;

class SatuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dbbarang = Satuan::all();
        return view('satuan/index', compact('dbbarang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('satuan/tambah');
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

            'nama_satuan' => 'required',
            'ketsatuan' => 'required',
        ]);

        $dbbarang = new Satuan();
        $dbbarang->id = $request->id;
        $dbbarang->nama_satuan = $request->nama_satuan;
        $dbbarang->ketsatuan = $request->ketsatuan;


        $dbbarang->save();
        return redirect()->route('satuan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Satuan  $satuan
     * @return \Illuminate\Http\Response
     */
    public function show(Satuan $satuan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Satuan  $satuan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $dbbarang = Satuan::findOrFail($id);

        return view('satuan/edit', compact('dbbarang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Satuan  $satuan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $dbbarang = $request->validate([
            'nama_satuan' => 'required',
            'ketsatuan' => 'required',
        ]);
        Satuan::whereId($id)->update($dbbarang);

        return redirect('/satuan')->with('success', 'successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Satuan  $satuan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $dbbarang = Satuan::findOrFail($id);
        $dbbarang->delete();

        return redirect('/satuan')->with('success', 'successfully deleted');
    }
}