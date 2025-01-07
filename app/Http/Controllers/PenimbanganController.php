<?php

namespace App\Http\Controllers;

use App\Models\Penimbangan;
use App\Http\Requests\StorePenimbanganRequest;
use App\Http\Requests\UpdatePenimbanganRequest;

class PenimbanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penimbangans = Penimbangan::all();
        return view('penimbangan.index', compact('penimbangans'));
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
    public function store(StorePenimbanganRequest $request)
    {
        $data = new Penimbangan();
        
        // Set base prices for each waste type
        $prices = [
            'organik' => 5000,         // Rp 5,000 per kg
            'anorganik' => 8000,       // Rp 8,000 per kg
            'sampah_campuran' => 3000  // Rp 3,000 per kg
        ];

        // Calculate total price
        $total_harga = $prices[$request->jenis_sampah] * $request->berat_sampah;

        // Fill the data
        $data->jenis_sampah = $request->jenis_sampah;
        $data->berat_sampah = $request->berat_sampah;
        $data->total_harga = $total_harga;
        $data->save();

        return redirect()->route('penimbangan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Penimbangan $penimbangan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Penimbangan $penimbangan)
    {
        return view('penimbangan.edit', compact('penimbangan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePenimbanganRequest $request, Penimbangan $penimbangan)
    {
        // Set base prices for each waste type
        $prices = [
            'organik' => 5000,         // Rp 5,000 per kg
            'anorganik' => 8000,       // Rp 8,000 per kg
            'sampah_campuran' => 3000  // Rp 3,000 per kg
        ];

        // Calculate total price
        $total_harga = $prices[$request->jenis_sampah] * $request->berat_sampah;

        // Fill the data
        $penimbangan->jenis_sampah = $request->jenis_sampah;
        $penimbangan->berat_sampah = $request->berat_sampah;
        $penimbangan->total_harga = $total_harga;
        $penimbangan->save();

        return redirect()->route('penimbangan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Penimbangan $penimbangan)
    {
        $penimbangan->delete();
        return redirect()->route('penimbangan.index');
    }
}
