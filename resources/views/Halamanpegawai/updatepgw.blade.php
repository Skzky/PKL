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
        <div class="center">
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
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Pegawai</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action ="{{url('Simpanupdatepresensi/'.$upd->id)}}" method="post">
                {{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">NIP</label>
                    <input type="text" class="form-control" id="NIP" name="NIP" value= "{{$upd->NIP}}" placeholder="NIP">
                  </div>
                  <div class="form-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Lengkap</label>
                    <input type="text" class="form-control" id="Nama_Lengkap" name="Nama_Lengkap" value= "{{$upd->Nama_Lengkap}}" placeholder="Nama Lengkap">
                  </div>


                    <div class="form-group">
                        <label>Jabatan</label>
                        <select type="text" name="id_jabatan" class="form-control">
                          <option value="" disabled selected>Pilih Jabatan</option>
                          @foreach($jbt as $item)
                          <option value= "{{$item->id }}">{{ $item->Jabatan }} </option>    
                          @endforeach
                        </select>
                      </div>

               <div class="form-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tempat Lahir</label>
                    <input type="text" class="form-control" id="Tempat" name="Tempat" value= "{{$upd->Tempat}}" placeholder="Tempat">
                  </div>
               <div class="form-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="Tgl" name="Tgl" value= "{{$upd->Tgl}}" placeholder="Tgl">
                  </div>
                <div class="form-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Alamat</label>
                    <input type="text" class="form-control" id="Tgl" name="Alamat" value= "{{$upd->Alamat}}" placeholder="Alamat">
                  </div>
                <div class="form-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Agama</label>
                    <input type="text" class="form-control" id="Agama" name="Agama" value= "{{$upd->Agama}}" placeholder="Agama">
                  </div>
                <div class="form-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">No.Telpon</label>
                    <input type="text" class="form-control" id="No_Telp" name="No_Telp" value= "{{$upd->No_Telp}}" placeholder="No_Telp">
                  </div>
                <div class="form-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jenis Kelamin</label>
                    <input type="text" class="form-control" id="Jenis_Kelamin" name="Jenis_Kelamin" value= "{{$upd->Jenis_Kelamin}}" placeholder="Jenis_Kelamin">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="text" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
               

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
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
