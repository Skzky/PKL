<?php

use Illuminate\Support\Facades\Route;
use App\Models\Presensi;
use App\Models\pegawai;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\pegawaicontroller;
use App\Http\Controllers\laporancontroller;
use App\Http\Controllers\presensicontroller;
use App\Http\Controllers\tampilusercontroller;
use App\Http\Controllers\tambahpegawaicontroller;
use App\Http\Controllers\jabatancontroller;

Route::get('/Login', [logincontroller::class, 'Halamanlogin'])->name('Login');

Route::get('/Registrasi', [logincontroller::class, 'Halamanregistrasi'])->name('Registrasi');

Route::post('/Simpamregistrasi', [logincontroller::class, 'simpanregistrasi'])->name('Simpanregistrasi');

Route::post('/postlogin', [logincontroller::class, 'postlogin'])->name('postlogin');

Route::get('/logout', [logincontroller::class, 'logout'])->name('logout');

// Presensi User
route::group(['middleware' => ['auth', 'ceklevel:Admin,pegawai']], function () {
    Route::get('/', function () {
        if (auth()->user()->level === 'Admin') {
        $jumlahPegawai = Pegawai::count();
        $jumlahMasuk = Presensi::where('Keterangan', 'masuk')->count();
        $jumlahKeluar = Presensi::where('Keterangan', 'keluar')->count();
        $jumlahIzin = Presensi::where('Keterangan', 'izin')->count();
            return view('welcome', compact ('jumlahPegawai', 'jumlahMasuk', 'jumlahKeluar', 'jumlahIzin' )); // Ganti dengan nama view halaman admin.
        } elseif (auth()->user()->level === 'pegawai') {
            return view('Halamanpresensi.userpresensi'); // Ganti dengan nama view halaman warga.
        }
    });

    // Laporan
    Route::get('/Laporan', [laporancontroller::class, 'Tampilhalamanlaporan']);
    // Presensi
    Route::get('/Presensi', [presensicontroller::class, 'Halamanpresensi']);
    Route::post('/Simpanpresensi', [presensicontroller::class, 'simpanpresensi']);
    Route::get('/Hapus_Laporan/{id}', [laporancontroller::class, 'hapuslaporan']);
    Route::get('/cetak', [laporancontroller::class, 'halamancetak']);
    Route::get('/digital-clock', function () {
        return view('digital-clock');
    });
    Route::get('/Presensiuser', [tampilusercontroller::class, 'tampilhalamanpresensiuser'])->name('Presensiuser');
    Route::get('/izinuser', [tampilusercontroller::class, 'tampilhalamanizin']);
    Route::post('/simpan_izin', [tampilusercontroller::class, 'simpanizin']);
    Route::get('/Masuk_keluar', [tampilusercontroller::class, 'Tampilhalamanmasukkeluar']);
    Route::post('/simpan_presensimasuk', [tampilusercontroller::class, 'simpanPresensiMasuk'])->name('simpan_presensimasuk');
    Route::post('/simpan_presensikeluar', [tampilusercontroller::class, 'simpanPresensiKeluar'])->name('simpan_presensikeluar');
    Route::get('/Hapus_Presensi/{id}', [tampilusercontroller::class, 'hapuspresensi']);



});

route::group(['middleware' => ['auth', 'ceklevel:Admin']], function () {
    // Pegawai
    Route::get('/Pegawai', [pegawaicontroller::class, 'tampilhalamanpegawai']);
    Route::get('/Tambahpegawai', [pegawaicontroller::class, 'tampiltambahpegawai']);
    Route::post('/Simpanpegawai', [pegawaicontroller::class, 'simpanpegawai']);
    Route::get('/Hapus_Pegawai/{id}', [pegawaicontroller::class, 'hapuspegawai']);
    Route::post('/simpan_update_Pegawai/{id}', [pegawaicontroller::class, 'updatepegawai']);
    Route::get('/Tampilhalamanupdatepegawai/{id}', [pegawaicontroller::class, 'Tampilhalamanupdatepegawai']);
    Route::get('/Update_Pegawai', [pegawaicontroller::class, 'tampilhalamanupdatepegawai']);
    // Jabatan
    Route::get('/Jabatan', [jabatancontroller::class, 'tampilhalamanjabatan']);
    Route::post('/Simpanjabatan', [jabatancontroller::class, 'simpanjabatan']);
    Route::get('/hapus_jabatan/{id}', [jabatancontroller::class, 'hapusjabatan']);
});
