<?php

namespace App\Http\Controllers;

use App\Models\tabungan;
use App\Http\Requests\StoretabunganRequest;
use App\Http\Requests\UpdatetabunganRequest;

class TabunganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tabungan = tabungan::all();
        return view('tabungan.index', compact('tabungan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoretabunganRequest $request)
    {
        $data = new tabungan();
        
        // Set base prices for each waste type
        $prices = [
            'organik' => 5000,         // Rp 5,000 per kg
            'anorganik' => 8000,       // Rp 8,000 per kg
            'sampah_campuran' => 3000  // Rp 3,000 per kg
        ];

        // Calculate total price
        $total_harga = $prices[$request->jenis_sampah] * $request->berat_sampah;

        // Fill the data
        $data->nama = $request->nama;
        $data->alamat = $request->alamat;
        $data->nomor_telepon = $request->nomor_telepon;
        $data->jenis_sampah = $request->jenis_sampah;
        $data->berat_sampah = $request->berat_sampah;
        $data->tanggal = $request->tanggal;
        $data->total_harga = $total_harga;
        $data->save();

        return redirect()->route('tabungan.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(tabungan $tabungan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tabungan $tabungan)
    {
        return view('tabungan.edit', compact('tabungan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatetabunganRequest $request, tabungan $tabungan)
    {
        // Set base prices for each waste type
        $prices = [
            'organik' => 5000,         // Rp 5,000 per kg
            'anorganik' => 8000,       // Rp 8,000 per kg
            'sampah_campuran' => 3000  // Rp 3,000 per kg
        ];

        // Calculate total price
        $total_harga = $prices[$request->jenis_sampah] * $request->berat_sampah;

        $tabungan->nama = $request->nama;
        $tabungan->alamat = $request->alamat;
        $tabungan->nomor_telepon = $request->nomor_telepon;
        $tabungan->jenis_sampah = $request->jenis_sampah;
        $tabungan->berat_sampah = $request->berat_sampah;
        $tabungan->total_harga = $total_harga;
        $tabungan->tanggal = $request->tanggal;
        $tabungan->save();

        return redirect()->route('tabungan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tabungan $tabungan)
    {
        $tabungan->delete();
        return redirect()->route('tabungan.index');
    }
}
