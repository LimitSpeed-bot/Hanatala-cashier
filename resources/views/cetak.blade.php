<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Struk Pembelian</title>

    <style>
        * {
            font-family: "Courier New", Courier, monospace;
        }

        body {
            margin: 0;
            padding: 0;
            width: 300px; /* Lebar struk untuk printer thermal */
        }

        p {
            margin: 0;
            font-size: 10pt;
        }

        h3 {
            margin: 5px 0;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table td {
            font-size: 9pt;
            padding: 2px 0;
        }

        .text-center {
            text-align: center;
        }

        .text-right {
            text-align: right;
        }

        .divider {
            border-top: 1px dashed #000;
            margin: 5px 0;
        }

        @media print {
            @page {
                margin: 0;
            }

            html,
            body {
                margin: 0;
                padding: 0;
            }

            .btn-print {
                display: none;
            }
        }
    </style>
</head>

<body onload="window.print()">
    <button class="btn-print" style="position: absolute; right: 1rem; top: 1rem;" onclick="window.print()">Print</button>

    <div>
        <h3>HANATALA</h3>
        <p class="text-center">Alamat: Jl. Contoh Alamat No. 123</p>
        <p class="text-center">Telp: 0812-3456-7890</p>
        <div class="divider"></div>

        <p>Tanggal: {{ date('d-m-Y') }}</p>
        <p>Kasir: {{ strtoupper(auth()->user()->name) }}</p>
        <p>No Transaksi: {{ $transaksi->id }}</p>

        <div class="divider"></div>

        <table>
            @foreach ($transaksi->details as $transaction_detail)
                <tr>
                    <td colspan="3">{{ $transaction_detail->barang->nama_barang }}</td>
                </tr>
                <tr>
                    <td>{{ $transaction_detail->qty }} x {{ number_format($transaction_detail->harga, 0, ',', '.') }}</td>
                    <td></td>
                    <td class="text-right">
                        Rp{{ number_format($transaction_detail->qty * $transaction_detail->harga, 0, ',', '.') }}
                    </td>
                </tr>
            @endforeach
        </table>

        <div class="divider"></div>

        <table>
            <tr>
                <td>Total Harga:</td>
                <td class="text-right">Rp{{ number_format($transaksi->total, 0, ',', '.') }}</td>
            </tr>
            <tr>
                <td>Bayar:</td>
                <td class="text-right">Rp{{ number_format($transaksi->dibayar, 0, ',', '.') }}</td>
            </tr>
            <tr>
                <td>Kembalian:</td>
                <td class="text-right">Rp{{ number_format($transaksi->kembalian, 0, ',', '.') }}</td>
            </tr>
            <tr>
                <td>Keterangan:</td>
                <td class="text-right">{{ $transaksi->keterangan }}</td>
            </tr>
        </table>

        <div class="divider"></div>
        <p class="text-center">-- TERIMA KASIH --</p>
    </div>

    <script>
        let body = document.body;
        let html = document.documentElement;
        let height = Math.max(
            body.scrollHeight, body.offsetHeight,
            html.clientHeight, html.scrollHeight, html.offsetHeight
        );

        document.cookie = "innerHeight=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
        document.cookie = "innerHeight=" + ((height + 50) * 0.264583);
    </script>
</body>

</html>
