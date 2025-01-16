<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaksi = Transaksi::with(['details.barang', 'pelanggan'])->get();
        return view('laporan', compact('transaksi'));
    }

    public function print(Request $request)
    {
        $query = Transaksi::query();

        // Filter berdasarkan rentang tanggal
        if (!empty($request->range_tanggal)) {
            $dates = explode(' - ', $request->range_tanggal); // Pisahkan input menjadi array
            $startDate = $dates[0];
            $endDate = $dates[1];

            $query->whereBetween('tanggal_jual', [$startDate, $endDate]);
        }

        // Ambil data hasil filter
        $transaksi = $query->with(['details.barang'])->get();

        // Buat PDF
        $pdf = \PDF::loadView('report', compact('transaksi'));

        // Tampilkan atau unduh file PDF
        return $pdf->stream('laporan_transaksi.pdf');
    }

    public function struk($id)
    {
        $transaksi = Transaksi::with('details.barang')->findOrFail($id);
        return view('cetak', compact('transaksi'));
    }

    public function getTransactionDetails($id)
    {
        $transaksi = Transaksi::with('details.barang')->findOrFail($id);
        return response()->json($transaksi);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
