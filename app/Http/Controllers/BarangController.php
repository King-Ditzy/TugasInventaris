<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang = Barang::all();
        return view('barang.index', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('barang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kode_barang'   => 'required|string|max:50|unique:barangs,kode_barang',
            'nama_barang'   => 'required|string|max:255',
            'kategori'      => 'required|string|max:100',
            'kondisi'       => 'required|string|max:50',
            'jumlah'        => 'required|integer|min:1',
            'lokasi'        => 'required|string|max:255',
            'tanggal_masuk' => 'nullable|date',
        ]);

        Barang::create($validated);

        return redirect()->route('barang.index')
            ->with('success', 'Data Barang Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Barang $barang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Barang $barang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Barang $barang)
    {
        //
    }
}