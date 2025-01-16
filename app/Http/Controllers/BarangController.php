<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kategori;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang = Barang::all();
        $kategori = Kategori::all();
        // dd($kategori);
        return view('barang', compact('barang', 'kategori'));
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
    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'nama_barang' => 'required|string|max:255|unique:barangs,nama_barang',
            'kategori_id' => 'required|exists:kategoris,id',
            'harga'       => 'required|numeric|min:0',
        ], [
            'nama_barang.required' => 'Nama barang harus diisi.',
            'nama_barang.unique'   => 'Nama barang sudah terdaftar.',
            'kategori_id.required' => 'Kategori harus dipilih.',
            'kategori_id.exists'   => 'Kategori yang dipilih tidak valid.',
            'harga.required'       => 'Harga harus diisi.',
            'harga.numeric'        => 'Harga harus berupa angka.',
        ]);

        // Simpan data yang sudah divalidasi
        Barang::create($validatedData);

        // Redirect dengan pesan sukses
        return redirect()->route('admin.barang')->with('success', 'Data barang berhasil ditambahkan.');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validasi input
        $request->validate([
            'nama_barang' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'kategori_id' => 'required|exists:kategoris,id',
        ]);

        // Cari barang berdasarkan ID
        $barang = Barang::findOrFail($id);

        // Perbarui data barang
        $barang->update([
            'nama_barang' => $request->nama_barang,
            'harga' => $request->harga,
            'kategori_id' => $request->kategori_id,
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('admin.barang')->with('success', 'Data Barang berhasil diperbarui.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Cari barang berdasarkan ID
        $barang = Barang::findOrFail($id);

        // Hapus data barang
        $barang->delete();

        // Redirect dengan pesan sukses
        return redirect()->route('admin.barang')->with('success', 'Data Barang berhasil dihapus.');
    }
}
