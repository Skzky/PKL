<?php

namespace App\Http\Controllers;
use App\Models\Presensi;
use App\Models\pegawai;
use Illuminate\Http\Request;

class presensicontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function Halamanpresensi()
    {
        
        return view ('Halamanpresensi.presensi');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function simpanpresensi(request $request)
    {
        presensi::create([
            'Id_pegawai' =>1 ,
            'Jenis_presensi' => $request->Jenis_presensi,
            'NIP' => $request->NIP,
            'Nama' => $request->Nama,
            'Waktu' => $request->Waktu,
            'Keterangan' => $request->Keterangan,
            'delstatus' => true,
        ]);

        return redirect('Laporan');

    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function welcome()
    {
        $jumlahPegawai = Pegawai::count();
        $jumlahMasuk = Presensi::where('Keterangan', 'masuk')->count();
        $jumlahKeluar = Presensi::where('Keterangan', 'keluar')->count();
        $jumlahIzin = Presensi::where('Keterangan', 'izin')->count();
    
        return view('welcome', compact('jumlahPegawai', 'jumlahMasuk', 'jumlahKeluar', 'jumlahIzin'));
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
