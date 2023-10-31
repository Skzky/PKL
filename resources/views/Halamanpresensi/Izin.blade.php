<!DOCTYPE html>
<html>
<head>
    <title>Presensi</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #007BFF;
            margin: 0;
            padding: 0;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            max-width: 400px;
            background-color: rgba(255, 255, 255, 0.7);
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }

        h2 {
            font-size: 24px;
            color: #007BFF;
            margin: 10px 0;
        }

        .presensi-img {
            max-width: 150px;
            height: auto;
            margin: 10px 0;
        }

        form {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .form-group {
            width: 80%;
            margin: 10px 0;
            text-align: left;
        }

        label {
            color: #007BFF;
            font-weight: bold;
        }

        select, input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .custom-file-input {
            cursor: pointer;
        }

        .card-footer {
            width: 100%;
            text-align: center;
        }

        button {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="{{asset('template/dist/img/pemko.png')}}" alt="AdminLTELogo" class="presensi-img">
        <h2>Presensi Pegawai Honorer</h2>
       <form action="{{url('simpan_izin')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="Id_user"></label>
                <input type="hidden" class="form-control" id="Id_user" name="Id_user" placeholder="Nama Lengkap" value="{{Auth()->User()->id}}">
            </div>
            <div class="form-group">
                <label for="Keterangan">Keterangan</label>
                <select class="form-control" id="Keterangan" name="Keterangan">
                    <option value="sakit">Sakit</option>
                    <option value="cuti">Cuti</option>
                    <option value="lainnya">Lainnya</option>
                </select>
            </div>
            <div class="form-group">
                <label for="Lampiran">Lampiran</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="Lampiran" name="Lampiran">
                        <label class="custom-file-label" for="Lampiran">Choose file</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="Waktu"></label>
                <input type="hidden" class="form-control" id="Waktu" name="Waktu" readonly>
                <p>{{ now()->format('Y-m-d H:i:s') }}</p>
            </div>
            <div class="card-footer">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
    <script>
        // Mengisi waktu saat halaman dimuat
        var currentTime = new Date();
        var hours = currentTime.getHours();
        var minutes = currentTime.getMinutes();
        var seconds = currentTime.getSeconds();
        var formattedTime = hours + ":" + minutes + ":" + seconds;
        document.getElementById('Waktu').value = formattedTime;
    </script>
</body>
</html>