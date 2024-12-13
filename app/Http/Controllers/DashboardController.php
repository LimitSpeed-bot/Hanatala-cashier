<?php

namespace App\Http\Controllers;

use App\Models\DetailTransaksi;
use App\Models\Pelanggan;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
{
    $transaksi = Transaksi::with(['details.barang', 'pelanggan'])->get();
    return view('index', compact('transaksi'));
}


    public function destroy($id)
    {
        try {
            // Cari transaksi berdasarkan ID
            $transaksi = Transaksi::findOrFail($id);

            // Hapus transaksi beserta detailnya (cascade delete jika diatur di schema)
            $transaksi->delete();

            return redirect()->route('transaction.details')->with('success', 'Transaksi berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menghapus transaksi.');
        }
    }


    public function getTransactionDetails($id)
    {
        $transaksi = Transaksi::with('details.barang')->findOrFail($id);
        return response()->json($transaksi);
    }

    public function print()
    {
        $transaksi = Transaksi::with('details.barang')->get();

        // Load tampilan PDF
        $pdf = \PDF::loadView('cetak', compact('transaksi'));

        // Unduh atau tampilkan file PDF
        return $pdf->stream('laporan_transaksi.pdf');
    }
    public function cetak($id)
    {
        $transaksi = Transaksi::with('details.barang')->findOrFail($id);
        return view('cetak', compact('transaksi'));
    }




}
