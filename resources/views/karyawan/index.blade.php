<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Tables</title>

    <!-- Custom fonts for this template -->
    <link href="{{ asset('tamplate/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('tamplate/css/sb-admin-2.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="{{ asset('tamplate/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">

    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            {{-- <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Karyawan</h6>
            </div> --}}
            <div class="card-body">
                <a href="{{ url('karyawan/create') }}" class="btn btn-primary btn-icon-split">
                    <span class="text">Input Pegawai baru</span>
                </a><br><br>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($karyawans as $karyawan)
                                @csrf
                                <tr>
                                    <td>{{ $karyawan->nama }}</td>
                                    <td>{{ $karyawan->alamat }}</td>
                                    <td>
                                        <a href="{{ url("karyawan/$karyawan->id/edit") }}"
                                            class="btn btn-warning btn-icon-split">
                                            <span class="text">Edit</span>
                                        </a>
                                        <a href="{{ url("karyawan/$karyawan->id/delete") }}"
                                            class="btn btn-danger btn-icon-split">
                                            <span class="text">Hapus</span>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('tamplate/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('tamplate/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('tamplate/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('tamplate/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('tamplate/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('tamplate/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('tamplate/js/demo/datatables-demo.js') }}"></script>

</body>

</html>
