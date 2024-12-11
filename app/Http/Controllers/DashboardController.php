<?php

namespace App\Http\Controllers;

use App\Models\DetailTransaksi;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $transaksi = Transaksi::with('details.barang')->get();
        return view('index', compact('transaksi'));
    }

    public function destroy($id)
    {
        $detail = DetailTransaksi::findOrFail($id);
        $detail->delete();

        return response()->json(['message' => 'Item berhasil dihapus dari laporan.']);
    }

    public function getTransactionDetails($id)
    {
        $transaksi = Transaksi::with('details.barang')->findOrFail($id);
        return response()->json($transaksi);
    }

    public function cetak()
    {
        $transaksi = Transaksi::with('details.barang')->get();

        // Load tampilan PDF
        $pdf = \PDF::loadView('report.cetak', compact('transaksi'));

        // Unduh atau tampilkan file PDF
        return $pdf->stream('laporan_transaksi.pdf');
    }

}
