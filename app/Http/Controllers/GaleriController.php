<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Http\Requests\StoreGaleriRequest;
use App\Http\Requests\UpdateGaleriRequest;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galeri = Galeri::all();
        return view('galeri.index', compact('galeri'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('galeri.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGaleriRequest $request)
    {
        $data = new Galeri();
        $data->keterangan = $request->deskripsi;
        $data->tanggal = $request->tanggal;
        
        $filename = '';
        if ($request->hasFile('gambar')) {
            $filename = $request->getSchemeAndHttpHost().'/asset/upload/'.time().'.'.$request->gambar->extension();
            $request->gambar->move(public_path('/asset/upload/'), $filename);
        }
        $data->gambar = $filename;
        $data->save();
        return redirect()->route('galeri.index');
    }

    public function tampil(){
        $galeri = Galeri::all();
        return view('galeri', compact('galeri'));
    }   

     /**
     * Display the specified resource.
     */
    public function show(Galeri $galeri)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Galeri $galeri)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGaleriRequest $request, Galeri $galeri)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Galeri $galeri)
    {
        //
    }
}
