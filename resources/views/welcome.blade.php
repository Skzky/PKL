<!DOCTYPE html>
<html lang="en">
<head>
    <title>AdminLTE 3 | Dashboard</title>
    @include('tools.head')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
         <img class="animation__shake" src="{{asset('template/dist/img/pemko.png')}}" alt="AdminLTELogo" style="width: 150px; height: auto;">
    </div>

    @include('tools.navbar')

    @include('tools.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- Box 1 - Jumlah Pegawai -->
                    <div class="col-md-3">
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h2>Jumlah Pegawai</h2>
                                <p>{{$jumlahPegawai}}</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-users"></i> <!-- Icon dari Font Awesome -->
                            </div>
                        </div>
                    </div>

                    <!-- Box 2 - Total Izin -->
                    <div class="col-md-3">
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h2>Total Izin</h2>
                                <p>{{$jumlahIzin}}</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-calendar-check"></i> <!-- Icon dari Font Awesome -->
                            </div>
                        </div>
                    </div>

                    <!-- Box 3 - Presensi Masuk -->
                    <div class="col-md-3">
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h2>Presensi Masuk</h2>
                                <p>{{$jumlahMasuk}}</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-sign-in-alt"></i> <!-- Icon dari Font Awesome -->
                            </div>
                        </div>
                    </div>

                    <!-- Box 4 - Presensi Keluar -->
                    <div class="col-md-3">
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h2>Presensi Keluar</h2>
                                <p>{{$jumlahKeluar}}</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-sign-out-alt"></i> <!-- Icon dari Font Awesome -->
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    @include('tools.footer')

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('tools.script')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</body>
</html>
