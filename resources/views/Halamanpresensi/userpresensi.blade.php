<!DOCTYPE html>
<html>

<head>
    <title>Presensi</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #000080;
            margin: 0;
            padding: 0;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            max-width: 600px;
            background-color: #B0E0E6;
            border-radius: 20px; /* Ubah border-radius menjadi 20px */
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .button-container {
            display: flex;
            justify-content: center;
        }

        .presensi-button, .btn-primary {
            width: 150px;
            margin: 10px;
            padding: 10px;
            background-color: #0056b3;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
        }

        .presensi-button .fa, .btn-primary .fa {
            font-size: 24px;
            margin-bottom: 10px;
        }

        h2 {
            font-size: 28px;
            color: #007BFF;
            margin: 20px 0;
        }

        p {
            font-size: 18px;
            color: #666;
            margin: 10px 0;
        }

        .presensi-img {
            max-width: 100%;
            max-height: 100px;
            height: auto;
        }

        #clock-container {
            background-color: #007BFF;
            color: white;
            font-size: 32px;
            border-radius: 100%;
            width: 150px;
            height: 150px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 20px 0;
        }
    </style>
</head>

<body>
    <div class="container">
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        <a href="{{ route('logout') }}" class="btn btn-danger" style="position: absolute; top: 10px; right: 10px;">Logout</a>
        <img src="{{asset('template/dist/img/pemko.png')}}" alt="AdminLTELogo" class="presensi-img">
        <h2>Presensi Pegawai Honorer</h2>
        <div id="clock-container">
            <div id="clock"></div>
        </div>
        <p style="color: #007BFF;">Silakan pilih opsi presensi:</p>
        <div class="button-container">
            <button type="button" class="presensi-button" data-toggle="modal" data-target="#exampleModal"><i
                    class="fa fa-check-circle"></i>
                Masuk
            </button>
            <a href="{{url ('izinuser')}}" class="presensi-button"><i class="fa fa-pencil"></i> Izin</a>
            <button type="button" class="presensi-button" data-toggle="modal" data-target="#keluar"><i
                    class="fa fa-sign-out"></i>
                Keluar
            </button>
        </div>
    </div>
      <script>
            function updateClock() {
                var now = new Date();
                var hours = now.getHours();
                var minutes = now.getMinutes();
                var seconds = now.getSeconds();
                
                var time = hours + ":" + (minutes < 10 ? "0" : "") + minutes + ":" + (seconds < 10 ? "0" : "") + seconds;
                
                document.getElementById("clock").textContent = time;
            }
            
            setInterval(updateClock, 1000);
            updateClock();
        </script>

    <!-- Modal Masuk -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><p>Presensi masuk</p></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>{{Auth()->User()->nama}}</p>
                    <p>Apakah yakin melakukan Presensi Masuk!!!</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                    <form method="post" action="{{ route('simpan_presensimasuk') }}">
                        {{ csrf_field() }}
                        <!-- Isi form Anda di sini -->
                        <button type="submit" class="btn btn-primary">Ya, Saya Yakin</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Pulang -->
    <div class="modal fade" id="keluar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><p>PRESENSI KELUAR PEGAWAI HONORER</P></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>{{Auth()->User()->nama}}</p>
                    <p>Apakah yakin melakukan Presensi Pulang!!!</P>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                    <form method="post" action="{{ route('simpan_presensikeluar') }}">
                        {{ csrf_field() }}
                        <!-- Isi formulir Anda di sini -->
                        <button type="submit" class="btn btn-primary">Ya, Saya Yakin</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
