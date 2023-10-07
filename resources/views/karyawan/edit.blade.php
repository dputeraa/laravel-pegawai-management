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

    <div class="col-lg-14">
        <div class="card">
            <div class="card-header">
                <a href="{{ url('karyawan') }}" class="btn btn-outline-secondary">
                    <i class="menu-icon fa fa-mail-reply-all"></i> <strong class="card-title">Kembali</strong>
                </a>
            </div>
        </div>
    </div>
    <div class="col-lg-14">
        <div class="card">
            <div class="card-body">
                <!-- Credit Card -->
                <div id="pay-invoice">
                    <div class="card-body">
                        <form action="{{ url("karyawan/$karyawan->id") }}" method="post" novalidate="novalidate">
                            @method('patch')
                            @csrf
                            <div class="form-group">
                                <label for="nama" class="control-label mb-1">Nama</label>
                                <input id="nama" name="nama" type="text" class="form-control"
                                    value="{{ $karyawan->nama }}">
                                @if ($errors->has('nama'))
                                    <span class="text-danger">{{ $errors->first('nama') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="alamat" class="control-label mb-1">Alamat</label>
                                <input id="alamat" name="alamat" type="text" class="form-control"
                                    value="{{ $karyawan->alamat }}">
                                @if ($errors->has('alamat'))
                                    <span class="text-danger">{{ $errors->first('alamat') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                    <span id="payment-button-amount">Simpan Data</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div> <!-- .card -->
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
