<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('template/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('template/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  
  <!-- /.login-logo -->
  <div class="card">
    <div class="login-logo text-center"> <!-- Tambahkan class "text-center" di sini -->
      <a href="../../index2.html">
        <span style="font-size: 20px; font-weight: bold;">DISBUDPORAPAR</span><br>
        <span style="font-size: 20px; font-weight: bold;">KOTA BANJARMASIN</span>
      </a>
    </div>
    <div class="image center text-center mt-1"> <!-- Tambahkan class "text-center" dan "mt-3" untuk margin top di sini -->
      <img src="{{asset('template/dist/img/pemko.png')}}" class="mx-auto img-fluid" alt="User Image" width="160" height="160"> <!-- Tambahkan atribut width dan height di sini -->
    </div>

    <div class="card-body login-card-body">
      <p class="login-box-msg">Masukkan Akun anda!!</p>

      <form action="{{ url('postlogin')}}" method="post">
        {{ csrf_field() }}
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
             <button type="submit" class="btn btn-primary btn-block text-center">Log In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      
      <!-- Registration Button -->
      <div class="col-12 text-left">
         <a href="{{ url('Registrasi') }}" class="col-12 text-left">Registrasi</a>
      </div>


    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ asset('template/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('template/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset ('template/dist/js/adminlte.min.js') }}"></script>
</body>
</html>
