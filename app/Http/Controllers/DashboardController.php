<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
{
    $barang = Barang::count();
    $totaltransaksi = Transaksi::count();

    $month = DB::table('transaksis')
    ->whereMonth('tanggal_jual', date('m'))
    ->whereYear('tanggal_jual', date('Y'))
    ->sum('total');

    $year = DB::table('transaksis')
    ->whereYear('tanggal_jual', date('Y'))
    ->sum('total');

    $transaksi = Transaksi::with(['details.barang', 'pelanggan'])->get();
    return view('index', compact('transaksi', 'year', 'month', 'barang', 'totaltransaksi'));
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


    public function cetak($id)
    {
        $transaksi = Transaksi::with('details.barang')->findOrFail($id);
        return view('cetak', compact('transaksi'));
    }
}
