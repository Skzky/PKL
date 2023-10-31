<!DOCTYPE html>
<html lang="en">

  <title>AdminLTE 3 | Dashboard</title>
@include('tools.head')
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
            <h1>Presensi Pegawai Honorer</h1>
          </div>
          <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="{{ url('cetak') }}" class="btn btn-primary"><i class="fas fa-print"></i></a></li>
</ol>


          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Presensi Masuk</h3>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-hover">
                            <!-- Tabel Kiri -->
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pegawai</th>
                                    <th>Keterangan</th>
                                    <th>Waktu Masuk</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            @php $no = 1; @endphp
                            @foreach($mkMasuk as $item)
                            <tbody>
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$item->User->nama}}</td>
                                    <td>{{$item->Keterangan}}</td>
                                    <td>{{ $item->created_at->setTimezone('Asia/Makassar')->format('Y-m-d H:i:s') }}</td>

                                    <td>
<a href="{{ url('Hapus_Presensi/' . $item->id) }}" class="btn btn-danger btn-user btn-md">
    <i class="fa fa-trash"></i>
</a>

                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Presensi Keluar</h3>
                    </div>
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <!-- Tabel Kanan -->
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pegawai</th>
                                    <th>Keterangan</th>
                                    <th>Waktu Keluar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            @php $no = 1; @endphp
                            @foreach($mkKeluar as $item)
                            <tbody>
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$item->User->nama}}</td>
                                    <td>{{$item->Keterangan}}</td>
                                    <td>{{ $item->created_at->setTimezone('Asia/Makassar')->format('Y-m-d H:i:s') }}</td>

                                    <td>
                                    <a href="{{ url('Hapus_Presensi/' . $item->id) }}" class="btn btn-danger btn-user btn-md">
    <i class="fa fa-trash"></i>
</a>

                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
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

</body>
</html>
