<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>Hanatala</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ url('/dist/css/dataTables.dataTables.css') }}">
    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ url('/dist/css/dataTables.dataTables.css') }}">
    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet">


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <div class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="bi bi-flower2"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Hanatala</div>
            </div>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/index') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url('/admin/kategori') }}">
                    <i class="bi bi-box"></i>
                    <span>Kategori</span>
                </a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url('/admin/barang') }}">
                    <i class="bi bi-boxes"></i>
                    <span>Barang</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url('/admin/pelanggan') }}">
                    <i class="bi bi-file-person-fill"></i>
                    <span>Pelanggan</span>
                </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link collapsed" href="{{ url('/admin/transaksi') }}">
                    <i class="bi bi-wallet2"></i>
                    <span>Transaksi</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/admin/laporan') }}">
                    <i class="bi bi-book"></i>
                    <span>Laporan</span>
                </a>
            </li>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <h2 class="desktop">Transaksi</h2>



                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">




                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Pengaturan</span>
                                {{-- <img class="img-profile rounded-circle" src="img/undraw_profile.svg"> --}}
                                <i class="bi bi-gear-fill"></i>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ url('/login') }}" data-toggle="modal"
                                    data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>

                </nav>
                <div class="container-transaksi">
                    <h1 class="mobile">Transaksi</h1>
                    <form id="transaksi-form">
                        <div class="row justify-content-between">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="tanggal_jual" class="form-label">Tanggal Jual</label>
                                    <input type="date" class="form-control" id="tanggal_jual" name="tanggal_jual"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label for="pelangan" class="form-label">Nama Pelanggan</label>
                                    <select id="pelanggan_id" class="form-select" required>
                                        <option value="">Pilih Pelanggan</option>
                                        @foreach ($pelanggan as $p)
                                            <option value="{{ $p->id }}">{{ $p->nama_pelanggan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3 ">
                                    <label for="keterangan" class="form-label">Keterangan</label>
                                    <input type="text" class="form-control" id="keterangan" name="keterangan">
                                </div>
                            </div>
                            <div class="col   ">
                                <div class=" mb-3">
                                    <label for="total" class="col-sm-2 form-label">Total</label>
                                    <div class="col">
                                        <input type="number" class="form-control" id="total" name="total"
                                            readonly>
                                    </div>
                                </div>
                                <div class=" mb-3">
                                    <label for="dibayar" class="col-sm-2 form-label">Dibayar</label>
                                    <div class="col">
                                        <input type="number" class="form-control" id="dibayar" name="dibayar"
                                            required>
                                    </div>
                                </div>

                                <div class=" mb-3">
                                    <label for="kembalian" class="col-sm-2 form-label">Kembalian</label>
                                    <div class="col">
                                        <input type="number" class="form-control" id="kembalian" name="kembalian"
                                            readonly>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="mb-3">
                            <div class="scrol">
                                <table id="barang-table" class="table">
                                    <thead>
                                        <tr>
                                            <th>Nama Barang</th>
                                            <th>Harga</th>
                                            <th>Qty</th>
                                            <th>Subtotal</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            </div>
                        </div>
                        <button type="button" id="add-barang" class="btn btn-primary">Tambah Barang</button>

                        <button type="submit" class="btn btn-success float-end">Simpan</button>
                </div>

                </form>
            </div>

            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Select "Logout" below if you are ready to end your current session.
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="{{ url('/login') }}">Logout</a>
                        </div>
                    </div>
                </div>
            </div>

            <script src="{{ url('dist/js/jquery-3.7.1.js') }}"></script>
            <!-- Bootstrap core JavaScript-->
            <script src="/vendor/jquery/jquery.min.js"></script>
            <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="/js/sb-admin-2.min.js"></script>

            <!-- Page level plugins -->
            <script src="/vendor/chart.js/Chart.min.js"></script>

            <!-- jQuery -->
            <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
            <!-- Bootstrap JS -->
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

            <!-- Page level custom scripts -->
            <script src="js/demo/chart-area-demo.js"></script>
            <script src="js/demo/chart-pie-demo.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0/dist/js/select2.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script>
                const inputtanggal_jual = document.getElementById('tanggal_jual');

                const today = new Date();

                const formattedDate = today.toISOString().split('T')[0];

                $(document).ready(function() {
                                $('#pelanggan_id').select2({
                                    placeholder: "Cari pelanggan",
                                    allowClear: true,
                                    width: '100%'
                                });
                            });

                inputtanggal_jual.value = formattedDate;
                $('#pelanggan_id').select2({
                    placeholder: "Cari pelanggan",
                    allowClear: true,
                    ajax: {
                        url: '{{ route('admin.pelanggan') }}',
                        dataType: 'json',
                        delay: 250,
                        processResults: function(data) {
                            return {
                                results: data.map(item => ({
                                    id: item.id,
                                    text: item.nama_pelanggan
                                }))
                            };
                        },
                        cache: true
                    },
                    width: '100%'
                });

                $(document).ready(function() {
                    let barangList = [];

                    // Set CSRF Token
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    // Load barang dan tambahkan ke tabel
                    $('#add-barang').click(function() {
                        $.get('{{ route('admin.transaksi.barang') }}', function(data) {
                            let barangList = data;
                            let options = barangList.map(b =>
                                `<option value="${b.id}" data-harga="${b.harga}">${b.nama_barang} - Rp ${b.harga}</option>`
                            );
                            let row = `
        <tr>
            <td>
                <select class="form-select barang-select">
                    <option value="">Pilih Barang</option>
                    ${options.join('')}
                </select>
            </td>
            <td class="harga">0</td>
            <td>
                <input type="number" class="form-control qty" min="1" value="1">
            </td>
            <td class="subtotal">0</td>
            <td>
                <button type="button" class="btn btn-danger remove-barang">Hapus</button>
            </td>
        </tr>`;
                            $('#barang-table tbody').append(row);

                            // Inisialisasi Select2 pada dropdown yang baru ditambahkan
                            $('.barang-select').last().select2({
                                placeholder: "Cari barang",
                                allowClear: true,
                                width: '100%'
                            });

                            // Event listener untuk barang-select (pembaruan harga dan subtotal)
                            $('.barang-select').last().on('change', function() {
                                let harga = $(this).find(':selected').data('harga') ||
                                    0; // Ambil harga dari data-harga
                                let qty = $(this).closest('tr').find('.qty')
                                    .val(); // Ambil quantity
                                let subtotal = harga * qty; // Hitung subtotal

                                // Update kolom harga dan subtotal
                                $(this).closest('tr').find('.harga').text(`Rp ${harga}`);
                                $(this).closest('tr').find('.subtotal').text(`Rp ${subtotal}`);

                                // Hitung total transaksi setelah perubahan
                                calculateTotal();
                            });

                            // Event listener untuk qty (pembaharuan subtotal)
                            $('.qty').last().on('input', function() {
                                let qty = $(this).val(); // Ambil quantity
                                let harga = $(this).closest('tr').find('.barang-select :selected')
                                    .data('harga') || 0; // Ambil harga dari data-harga
                                let subtotal = harga * qty; // Hitung subtotal

                                // Update kolom subtotal
                                $(this).closest('tr').find('.subtotal').text(`Rp ${subtotal}`);

                                // Hitung total transaksi setelah perubahan
                                calculateTotal();
                            });

                        }).fail(function() {
                            alert('Gagal memuat data barang. Silakan coba lagi.');
                        });
                    });

                    // Hapus barang dari tabel
                    $(document).on('click', '.remove-barang', function() {
                        $(this).closest('tr').remove();
                        calculateTotal();
                    });

                    // Fungsi untuk menghitung total transaksi
                    function calculateTotal() {
                        let total = 0;

                        // Iterasi setiap baris untuk menghitung total subtotal
                        $('#barang-table tbody tr').each(function() {
                            let subtotalText = $(this).find('.subtotal').text().replace(/[^\d]/g,
                                ''); // Hapus semua karakter kecuali angka
                            let subtotal = parseFloat(subtotalText) || 0; // Mengonversi subtotal ke angka
                            total += subtotal; // Tambahkan subtotal ke total
                        });

                        // Log untuk debugging
                        console.log('Total dihitung:', total);

                        // Tampilkan total dalam input #total (tanpa format)
                        $('#total').val(total);

                        // Perbarui nilai kembalian jika dibayar sudah terisi
                        updateKembalian();
                    }

                    // Fungsi untuk memperbarui kembalian secara real-time
                    $('#dibayar').on('input', function() {
                        updateKembalian();
                    });

                    // Fungsi untuk menghitung kembalian
                    function updateKembalian() {
                        let total = parseFloat($('#total').val().replace('Rp', '').replace(',', '').trim()) || 0;
                        let dibayar = parseFloat($('#dibayar').val()) || 0;
                        let kembalian = dibayar - total;

                        // Tampilkan kembalian di input form
                        $('#kembalian').val(kembalian >= 0 ? kembalian : 0);
                    }

                    // Proses form transaksi
                    $('#transaksi-form').submit(function(e) {
                        e.preventDefault();

                        let details = [];
                        $('#barang-table tbody tr').each(function() {
                            let row = $(this);
                            let barangId = row.find('.barang-select').val();
                            let qty = parseInt(row.find('.qty').val());
                            let harga = parseFloat(row.find('.harga').text().replace('Rp', '').replace(',',
                                '').trim());

                            if (barangId && qty > 0 && harga > 0) {
                                details.push({
                                    barang_id: barangId,
                                    qty: qty,
                                    harga: harga
                                });
                            }
                        });

                        if (details.length === 0) {
                            alert('Tambahkan minimal satu barang ke transaksi.');
                            return;
                        }

                        let total = parseFloat($('#total').val().replace('Rp', '').replace(',', '').trim()) || 0;
                        let dibayar = parseFloat($('#dibayar').val()) || 0;
                        let kembalian = dibayar - total;

                        if (dibayar < total) {
                            alert('Jumlah yang dibayar tidak boleh kurang dari total.');
                            return;
                        }

                        let data = {
                            tanggal_jual: $('#tanggal_jual').val(),
                            total: total,
                            keterangan: $('#keterangan').val(),
                            dibayar: dibayar,
                            kembalian: kembalian,
                            pelanggan_id: $('#pelanggan_id').val(), // Ambil pelanggan_id dari form
                            details: details
                        };

                        // Mengirim data transaksi menggunakan AJAX
                        $.ajax({
                            url: '{{ route('admin.transaksi.store') }}',
                            type: 'POST',
                            contentType: 'application/json',
                            data: JSON.stringify(data),
                            success: function(response) {
                                alert(response.message || 'Transaksi berhasil disimpan.');

                                // Membuka halaman struk yang baru saja disimpan
                                window.open('{{ route('admin.struk.cetak', '') }}/' + response
                                    .transaksi_id, '_blank');

                                location.reload(); // Reload halaman jika perlu
                            },
                            error: function(xhr) {
                                console.error(xhr.responseJSON);
                                alert('Terjadi kesalahan: ' + (xhr.responseJSON.message ||
                                    'Periksa kembali data Anda.'));
                            }
                        });


                    });

                    // Fungsi untuk menghitung harga dan subtotal setiap kali barang dipilih atau quantity diubah
                    $(document).on('change', '.barang-select', function() {
                        let row = $(this).closest('tr');
                        let harga = $(this).find(':selected').data('harga') || 0;
                        let qty = row.find('.qty').val();
                        let subtotal = harga * qty;

                        // Update harga dan subtotal di baris yang sesuai
                        row.find('.harga').text('Rp ' + harga);
                        row.find('.subtotal').text('Rp ' + subtotal);

                        // Hitung total transaksi setelah perubahan
                        calculateTotal();
                    });

                    // Ketika quantity diubah, perbarui subtotal dan total transaksi
                    $(document).on('input', '.qty', function() {
                        let row = $(this).closest('tr');
                        let harga = row.find('.barang-select').find(':selected').data('harga') || 0;
                        let qty = $(this).val();
                        let subtotal = harga * qty;

                        // Update subtotal di baris yang sesuai
                        row.find('.subtotal').text('Rp ' + subtotal);

                        // Hitung total transaksi setelah perubahan
                        calculateTotal();
                    });
                });
            </script>


</body>

</html>
