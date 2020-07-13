<?php

namespace App\Http\Controllers;

use App\Dbl;
use Illuminate\Http\Request;

class DblController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dbbarang = Dbl::all();
        return view('dbl/index', compact('dbbarang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dbl/tambah');
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

            'nama_dbl' => 'required',
            'ketdbl' => 'required',
        ]);

        $dbbarang = new Dbl();
        $dbbarang->id = $request->id;
        $dbbarang->nama_dbl = $request->nama_dbl;
        $dbbarang->ketdbl = $request->ketdbl;


        $dbbarang->save();
        return redirect()->route('dbl.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dbl  $dbl
     * @return \Illuminate\Http\Response
     */
    public function show(Dbl $dbl)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dbl  $dbl
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $dbbarang = Dbl::findOrFail($id);

        return view('dbl/edit', compact('dbbarang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dbl  $dbl
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $dbbarang = $request->validate([
            'nama_dbl' => 'required',
            'ketdbl' => 'required',
        ]);
        Dbl::whereId($id)->update($dbbarang);

        return redirect('/dbl')->with('success', 'successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dbl  $dbl
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $dbbarang = Dbl::findOrFail($id);
        $dbbarang->delete();

        return redirect('/dbl')->with('success', 'successfully deleted');
    }
}