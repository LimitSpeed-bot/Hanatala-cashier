<body>
    <h3 style="text-align: center;">Laporan Transaksi</h3>
    <p style="text-align: center;">Tanggal: {{ date('d-m-Y') }}</p>
    <table width="100%" border="1" cellspacing="0" cellpadding="5">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal Jual</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Subtotal</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @php $no = 1; @endphp
            @foreach ($transaksi as $t)
                @php $rowspan = $t->details->count(); @endphp
                <tr>
                    <td rowspan="{{ $rowspan }}">{{ $no++ }}</td>
                    <td rowspan="{{ $rowspan }}">{{ $t->tanggal_jual }}</td>
                    @if ($rowspan > 0)
                        <td>{{ $t->details[0]->barang->nama_barang }}</td>
                        <td>Rp {{ number_format($t->details[0]->harga, 0, ',', '.') }}</td>
                        <td>{{ $t->details[0]->qty }}</td>
                        <td>Rp {{ number_format($t->details[0]->harga * $t->details[0]->qty, 0, ',', '.') }}</td>
                        <td rowspan="{{ $rowspan }}">Rp {{ number_format($t->total, 0, ',', '.') }}</td>
                    @endif
                </tr>
                @for ($i = 1; $i < $rowspan; $i++)
                    <tr>
                        <td>{{ $t->details[$i]->barang->nama_barang }}</td>
                        <td>Rp {{ number_format($t->details[$i]->harga, 0, ',', '.') }}</td>
                        <td>{{ $t->details[$i]->qty }}</td>
                        <td>Rp {{ number_format($t->details[$i]->harga * $t->details[$i]->qty, 0, ',', '.') }}</td>
                    </tr>
                @endfor
            @endforeach
        </tbody>
    </table>
</body>
