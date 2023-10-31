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
            <h1>Biodata Pegawai Honorer</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url ('/')}}" >Home</a></li>
              <li class="breadcrumb-item active">Pegawai</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Dinas Kebudayaan, Kepemudaan, Olahraga & Pariwisata</h3>
            <div class="card-tools">
              <a href="{{ url('Tambahpegawai') }}" class="btn btn-primary">Tambah Pegawai</a>
              <a href="{{ url('Jabatan') }}" class="btn btn-primary">Input Jabatan</a>
            </div>
          </div>
          <!-- ... (your existing code) ... -->
        </div>
      </div>
    </div>
  </div>
</section>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Tempat</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>No.Telp</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  @foreach($pg as $item)
                  <tbody>
                    <tr>
                      <td>{{$item->NIP}}</td>
                      <td>{{$item->Nama_Lengkap}}</td>
                      <td>{{$item->jabatan->Jabatan}}</td>
                      <td>{{$item->Tempat}}</td>
                      <td>{{$item->Tgl}}</td>
                      <td>{{$item->Alamat}}</td>
                      <td>{{$item->Jenis_Kelamin}}</td>
                      <td>{{$item->Agama}}</td>
                      <td>{{$item->No_Telp}}</td>
                      <td>
                        <a href="{{asset('Foto/'.$item->Foto )}}" target="_blank" rel="noopener noreferrer">Lihat Foto</a>
                      </td>
                      <td>
                      <a href= "{{ url ('Tampilhalamanupdatepegawai/' .$item->id) }}" class="btn btn-warning btn-user btn-md">
                          <i class="fa fa-edit"></i></a>
                        <a href= "{{ url ('Hapus_Pegawai/' .$item->id) }}" class="btn btn-danger btn-user btn-md">
                          <i class="fa fa-trash"></i></a>
                      </td>
                     
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
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
