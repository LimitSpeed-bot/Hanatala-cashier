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

    <!-- Custom fonts for this template-->
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
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/') }}">
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
                    <i class="bi bi-boxes"></i>
                    <span>Kategori</span>
                </a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url('/admin/barang') }}">
                    <i class="bi bi-box"></i>
                    <span>Barang</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url('/admin/pelanggan') }}">
                    <i class="bi bi-file-person-fill"></i>
                    <span>Pelanggan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url('/admin/kasir') }}">
                    <i class="bi bi-calculator"></i>
                    <span>Kasir</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url('/admin/transaksi') }}">
                    <i class="bi bi-wallet2"></i>
                    <span>Transaksi</span>
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

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small"
                                placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
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
                <div class="container">
                    <h1>Transaksi</h1>
                    <form id="transaksi-form">
                        <div class="mb-3">
                            <label for="tanggal_jual" class="form-label">Tanggal Jual</label>
                            <input type="date" class="form-control" id="tanggal_jual" name="tanggal_jual"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="keterangan" class="form-label">Keterangan</label>
                            <input type="text" class="form-control" id="keterangan" name="keterangan">
                        </div>
                        <select id="pelanggan_id" class="form-select" required>
                            <option value="">Pilih Pelanggan</option>
                            @foreach ($pelanggan as $p)
                                <option value="{{ $p->id }}">{{ $p->nama_pelanggan }}</option>
                            @endforeach
                        </select>

                        <div class="mb-3">
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
                        <button type="button" id="add-barang" class="btn btn-primary">Tambah Barang</button>
                        <div class="mb-3">
                            <label for="total" class="form-label">Total</label>
                            <input type="number" class="form-control" id="total" name="total" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="dibayar" class="form-label">Dibayar</label>
                            <input type="number" class="form-control" id="dibayar" name="dibayar" required>
                        </div>
                        <div class="mb-3">
                            <label for="kembalian" class="form-label">Kembalian</label>
                            <input type="number" class="form-control" id="kembalian" name="kembalian" readonly>
                        </div>
                        <button type="submit" class="btn btn-success">Simpan</button>
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
                <script src="vendor/jquery/jquery.min.js"></script>
                <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                <!-- Core plugin JavaScript-->
                <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

                <!-- Custom scripts for all pages-->
                <script src="js/sb-admin-2.min.js"></script>

                <!-- Page level plugins -->
                <script src="vendor/chart.js/Chart.min.js"></script>

                <!-- Page level custom scripts -->
                <script src="js/demo/chart-area-demo.js"></script>
                <script src="js/demo/chart-pie-demo.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
                </script>
                <script>
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
                                barangList = data;
                                let options = barangList.map(b =>
                                    `<option value="${b.id}">${b.nama_barang} - Rp ${b.harga}</option>`
                                );
                                let row = `
                            <tr>
                                <td>
                                    <select class="form-select barang-select">${options.join('')}</select>
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
                            }).fail(function() {
                                alert('Gagal memuat data barang. Silakan coba lagi.');
                            });
                        });

                        // Update harga dan subtotal saat barang atau jumlah berubah
                        $(document).on('change', '.barang-select, .qty', function() {
                            let row = $(this).closest('tr');
                            let barangId = row.find('.barang-select').val();
                            let barang = barangList.find(b => b.id == barangId);
                            if (barang) {
                                let qty = parseInt(row.find('.qty').val()) || 0;
                                let subtotal = barang.harga * qty;

                                row.find('.harga').text(barang.harga);
                                row.find('.subtotal').text(subtotal);
                                calculateTotal();
                            }
                        });

                        // Hapus barang dari tabel
                        $(document).on('click', '.remove-barang', function() {
                            $(this).closest('tr').remove();
                            calculateTotal();
                        });

                        // Hitung total transaksi
                        function calculateTotal() {
                            let total = 0;
                            $('#barang-table tbody tr').each(function() {
                                total += parseFloat($(this).find('.subtotal').text()) || 0;
                            });
                            $('#total').val(total);

                            // Perbarui nilai kembalian jika dibayar sudah terisi
                            updateKembalian();
                        }

                        // Perbarui kembalian secara real-time
                        $('#dibayar').on('input', function() {
                            updateKembalian();
                        });

                        function updateKembalian() {
                            let total = parseFloat($('#total').val()) || 0;
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
                                let harga = parseFloat(row.find('.harga').text());
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

                            let total = parseFloat($('#total').val()) || 0;
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

                            $.ajax({
                                url: '{{ route('admin.transaksi.store') }}',
                                type: 'POST',
                                contentType: 'application/json',
                                data: JSON.stringify(data),
                                success: function(response) {
                                    alert(response.message || 'Transaksi berhasil disimpan.');
                                    location.reload();
                                },
                                error: function(xhr) {
                                    console.error(xhr.responseJSON);
                                    alert('Terjadi kesalahan: ' + (xhr.responseJSON.message ||
                                        'Periksa kembali data Anda.'));
                                }
                            });
                        });
                    });
                </script>


</body>

</html>
