<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\DetailTransaksi;
use App\Models\Pelanggan;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $barang = Barang::all();
        $pelanggan = Pelanggan::all();
        return view('transaksi', compact('barang', 'pelanggan'));
    }

    public function getBarang()
    {
        return response()->json(Barang::select('id', 'nama_barang', 'harga')->get());
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal_jual' => 'required|date',
            'total' => 'required|numeric',
            'keterangan' => 'nullable|string',
            'dibayar' => 'required|numeric',
            'kembalian' => 'required|numeric',
            'details' => 'required|array',
            'pelanggan_id' => 'required|exists:pelanggans,id', // Validasi pelanggan
        ]);

        $transaksi = Transaksi::create([
            'tanggal_jual' => $request->tanggal_jual,
            'total' => $request->total,
            'keterangan' => $request->keterangan,
            'dibayar' => $request->dibayar,
            'kembalian' => $request->kembalian,
            'pelanggan_id' => $request->pelanggan_id, // Simpan pelanggan_id
        ]);

        foreach ($request->details as $detail) {
            DetailTransaksi::create([
                'transaksi_id' => $transaksi->id,
                'barang_id' => $detail['barang_id'],
                'qty' => $detail['qty'],
                'harga' => $detail['harga'],
            ]);
        }

        return response()->json([
            'message' => 'Transaksi berhasil disimpan.',
            'transaksi_id' => $transaksi->id,
        ]);
    }
    public function cetak($id)
    {
        $transaksi = Transaksi::with('details.barang')->findOrFail($id);
        return view('cetak', compact('transaksi'));
    }
}
