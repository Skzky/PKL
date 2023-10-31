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
            <img class="animation__shake" src="{{ asset('template/dist/img/pemko.png') }}" alt="AdminLTELogo" style="width: 150px; height: auto;">
        </div>
        @include('tools.navbar')
        @include('tools.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1>Disbudporapar Kota Banjarmasin</h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- General form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Isi Presensi Pegawai Honorer</h3>
                                </div>
                                <!-- Form start -->
                                <form action="{{ url('Simpanjabatan') }}" method="post">
                                    {{ csrf_field() }}

                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="jabatan">Jabatan Pegawai</label>
                                            <input type="text" class="form-control" id="jabatan" name="Jabatan" placeholder="Enter Jabatan">
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Kirim</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Jabatan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jbn as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->Jabatan }}</td>
                            <td>
                                <a href="{{ url('#') }}" class="btn btn-warning btn-user btn-md">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="{{ url('hapus_jabatan') }}" class="btn btn-danger btn-user btn-md">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @include('tools.footer')

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    @include('tools.script')
</body>
</html>
