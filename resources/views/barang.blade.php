<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Hanatala</title>

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0/dist/css/select2.min.css" rel="stylesheet" />

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

        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <div class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="bi bi-flower2"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Hanatala</div>
            </div>

            <hr class="sidebar-divider my-0">

            <li class="nav-item">
                <a class="nav-link" href="{{ url('/index') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <hr class="sidebar-divider">

            <div class="sidebar-heading">Interface</div>
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url('/admin/kategori') }}">
                    <i class="bi bi-box"></i>
                    <span>Kategori</span>
                </a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link collapsed" href="{{ url('/admin/barang') }}">
                    <i class="bi bi-boxes"></i>
                    <span>Barang</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/admin/pelanggan') }}">
                    <i class="bi bi-file-person-fill"></i>
                    <span>Pelanggan</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('/admin/transaksi') }}">
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


                    <h2 class="desktop">Barang</h2>
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

                <!-- ModalTambah -->
                <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Barang</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="{{ route('admin.barang.store') }}" method="POST">
                                @csrf
                                <div class="modal-body">
                                    <!-- Nama Barang -->
                                    <div class="mb-3">
                                        <label for="nama_barang" class="form-label">Nama Barang</label>
                                        <input type="text" class="form-control" id="nama_barang"
                                            placeholder="Bunga Ukuran 12" name="nama_barang"
                                            value="{{ old('nama_barang') }}">
                                        @if ($errors->has('nama_barang'))
                                            <small class="text-danger">{{ $errors->first('nama_barang') }}</small>
                                        @endif
                                    </div>

                                    <!-- Harga -->
                                    <div class="mb-3">
                                        <label for="harga" class="form-label">Harga</label>
                                        <input type="number" class="form-control" id="harga"
                                            placeholder="10000" name="harga"
                                            value="{{ old('harga') }}">
                                        @if ($errors->has('harga'))
                                            <small class="text-danger">{{ $errors->first('harga') }}</small>
                                        @endif
                                    </div>

                                    <!-- Kategori -->
                                    <div class="mb-3">
                                        <label for="kategori_id" class="form-label">Kategori</label>
                                        <select class="form-select" id="kategori_id" name="kategori_id">
                                            <option value="">Pilih Kategori</option>
                                            @foreach ($kategori as $kategoris)
                                                <option value="{{ $kategoris->id }}"
                                                    {{ old('kategori_id') == $kategoris->id ? 'selected' : '' }}>
                                                    {{ $kategoris->nama_kategori }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('kategori'))
                                            <small class="text-danger">{{ $errors->first('kategori') }}</small>
                                        @endif
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

                <div class="section-tabel">
                    <h1 class="mobile">Barang</h1>

                            <span><button class="btn btn-primary float-end tabel-margin"
                            data-bs-toggle="modal" data-bs-target="#tambahModal">Tambah Barang</button></span>
                    <div class="scrol">
                        @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                        <table class="table tb" id="myTable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Barang</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($barang as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nama_barang }}</td>
                                        <td>{{ $item->harga }}</td>
                                        <td>{{ $item->kategori->nama_kategori }}</td>
                                        <td class="distance">
                                            <div class="btn-group" role="group"
                                                aria-label="Basic mixed styles example">
                                                <!-- Tombol Ubah -->
                                                <button type="button" class="btn btn-warning btn-size"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#editModal{{ $item->id }}">Ubah</button>
                                            </div>
                                            <div class="hapus">
                                                <!-- Tombol Hapus -->
                                                <form id="delete-form-{{ $item->id }}"
                                                    action="{{ route('admin.barang.destroy', $item->id) }}"
                                                    method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="btn btn-danger delete-button btn-size">Hapus</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- Modal Edit -->
                                    <div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1"
                                        aria-labelledby="editModalLabel{{ $item->id }}" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <form action="{{ route('admin.barang.update', $item->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-header">
                                                        <h5 class="modal-title"
                                                            id="editModalLabel{{ $item->id }}">
                                                            Edit Barang</h5>
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="mb-3">
                                                            <label for="nama_barang{{ $item->id }}"
                                                                class="form-label">Nama Barang</label>
                                                            <input type="text" class="form-control"
                                                                id="nama_barang{{ $item->id }}"
                                                                name="nama_barang"
                                                                value="{{ old('nama_barang', $item->nama_barang) }}"
                                                                required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="harga{{ $item->id }}"
                                                                class="form-label">Harga</label>
                                                            <input type="number" class="form-control"
                                                                id="harga{{ $item->id }}" name="harga"
                                                                value="{{ old('harga', $item->harga) }}" required>
                                                        </div>
                                                        <!-- Input Kategori -->
                                                        <div class="mb-3">
                                                            <label for="kategori_id{{ $item->id }}"
                                                                class="form-label">Kategori</label>
                                                            <select class="form-select"
                                                                id="kategori_id{{ $item->id }}"
                                                                name="kategori_id" required>
                                                                <option value="" disabled>Pilih Kategori</option>
                                                                @foreach ($kategori as $kategoris)
                                                                    <option value="{{ $kategoris->id }}"
                                                                        {{ $item->kategori_id == $kategoris->id ? 'selected' : '' }}>
                                                                        {{ $kategoris->nama_kategori }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Batal</button>
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
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
                <script src="{{ url('dist/js/dataTables.js') }}"></script>
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
                <script src="../js/demo/chart-area-demo.js"></script>
                <script src="../js/demo/chart-pie-demo.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
                </script>
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script>
                    new DataTable('#myTable');

                    $(document).ready(function() {
                                $('#kategori_id').select2({
                                    placeholder: "Cari kategori",
                                    allowClear: true,
                                    width: '100%'
                                });
                            });


                $('#kategori_id').select2({
                    placeholder: "Cari kategori",
                    allowClear: true,
                    ajax: {
                        url: '{{ route('admin.barang') }}',
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

                    document.addEventListener("DOMContentLoaded", function() {
                        const deleteButtons = document.querySelectorAll(".delete-button");

                        deleteButtons.forEach(button => {
                            button.addEventListener("click", function(e) {
                                e.preventDefault(); // Prevent form submission before confirmation
                                const formId = this.closest("form").id; // Get form id

                                Swal.fire({
                                    title: "Kamu yakin ingin menghapus?",
                                    text: "Kamu tidak akan bisa mengembalikan data ini!",
                                    icon: "warning",
                                    showCancelButton: true,
                                    confirmButtonColor: "#3085d6",
                                    cancelButtonColor: "#d33",
                                    confirmButtonText: "Ya, Hapus!",
                                    cancelButtonText: "Batal"
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        // If confirmed, submit the form
                                        document.getElementById(formId).submit();
                                    }
                                });
                            });
                        });
                    });
                </script>
</body>

</html>
