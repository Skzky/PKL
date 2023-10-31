<!DOCTYPE html>
<html>
<head>
    <title>Laporan Presensi Pegawai Honorer Masuk & Keluar</title>
    <style type="text/css">
        body {
            background-color: #ccc;
        }

        .rangkasurat {
            width: 930px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border: none;
          
        }

        table {
            border-bottom: 5px solid #000;
            width: 100%;
        }

        th, td {
            border: 0px solid #050505;
            padding: 8px 14px;
        }

        .tengah {
            text-align: center;
        }

        .table1 {
            color: #232323;
            border-collapse: collapse;
            width: 100%;
        }

        .table1 th, .table1 td {
            border: 2px solid #050505;
            padding: 8px 14px;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="rangkasurat no-border">
    <table>
        <tr>
            <th><img src="{{ asset('template/dist/img/pemko.png') }}" width="80px"></th>
            <th class="tengah">
                <h3>PEMERINTAH KOTA BANJARMASIN</h3>
                <h2>DINAS KEBUDAYAAN, KEPEMUDAAN, OLAHRAGA DAN PARIWISATA</h2>
                <p>Alamat: Jl. Pangeran Hidayatullah (Lingkar Dalam Bunua Anyar) Banjarmasin</p>
                <p>Website: www.banjarmasintoursm.com</p>
            </th>
        </tr>
    </table>
    <br>
    <table class="table1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pegawai</th>
                <th>Waktu</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
          @php $no =1; @endphp
            @foreach($ct as $item)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{$item->User->nama}}</td>
                <td>{{ $item->created_at }}</td>
                <td>{{ $item->Keterangan }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
<script>

window.print();

</script>
</html>
