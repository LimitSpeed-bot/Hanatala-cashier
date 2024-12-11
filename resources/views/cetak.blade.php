<!DOCTYPE html>
<html>
<head>
    <title>Laporan Transaksi</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Laporan Transaksi</h1>
    <table>
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transaksi as $trx)
                @foreach ($trx->details as $detail)
                    <tr>
                        <td>{{ $trx->tanggal_jual }}</td>
                        <td>{{ $detail->barang->nama_barang }}</td>
                        <td>{{ $detail->qty }}</td>
                        <td>{{ number_format($detail->harga, 2) }}</td>
                        <td>{{ number_format($detail->qty * $detail->harga, 2) }}</td>
                    </tr>
                @endforeach
            @endforeach
        </tbody>
    </table>
</body>
</html>
