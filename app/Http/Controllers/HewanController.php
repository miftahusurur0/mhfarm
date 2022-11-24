<?php

namespace App\Http\Controllers;

use App\Models\Hewan;
use Illuminate\Http\Request;

class HewanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('hewan.index')->with([
            'hewan' => Hewan::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hewan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required|max:12',
            'nama_hwn' => 'required',
            'jenis_hwn' => 'required',
            'asal_hwn' => 'required',
            'umur_hwn' => 'required',
            'berat_hwn' => 'required',
            'harga_hwn' => 'required',
        ]);
        $hewan = new Hewan;
        $hewan->kode = $request->kode;
        $hewan->nama_hwn = $request->nama_hwn;
        $hewan->jenis_hwn = $request->jenis_hwn;
        $hewan->asal_hwn = $request->asal_hwn;
        $hewan->umur_hwn = $request->umur_hwn;
        $hewan->berat_hwn = $request->berat_hwn;
        $hewan->harga_hwn = $request->harga_hwn;
        $hewan->save();

        return to_route('hewan.index')->with('success', 'Data Berhasil di Tambah !');

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
        return view('hewan.edit')->with([
            'hewan' => Hewan::find($id),
        ]);
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
        $request->validate([
            'nama_hwn' => 'required',
            'jenis_hwn' => 'required',
            'asal_hwn' => 'required',
            'umur_hwn' => 'required',
            'berat_hwn' => 'required',
            'harga_hwn' => 'required',
        ]);
        $hewan = Hewan::find($id);
        $hewan->nama_hwn = $request->nama_hwn;
        $hewan->jenis_hwn = $request->jenis_hwn;
        $hewan->asal_hwn = $request->asal_hwn;
        $hewan->umur_hwn = $request->umur_hwn;
        $hewan->berat_hwn = $request->berat_hwn;
        $hewan->harga_hwn = $request->harga_hwn;
        $hewan->save();

        return to_route('hewan.index')->with('success', 'Data Berhasil di Ubah !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hewan = Hewan::find($id);
        $hewan->delete();

        return back()->with('success', 'Data Berhasil di Hapus !');

    }
}