<?php

namespace App\Http\Controllers;
use App\Models\Presensi;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Database\Eloquent\Model;


class tampilusercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function tampilhalamanpresensiuser()
    {
        return view('Halamanpresensi.userpresensi');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function tampilhalamanizin()
    {
        return view('Halamanpresensi.Izin');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function simpanizin(Request $request)
    {
        $request->validate([
            'Lampiran' => 'required|file|mimes:pdf,doc,jpg,png,jpeg,docx|max:2048',
        ]);
    
        $doc = $request->file('Lampiran');
        $nmdoc = time() . rand(100, 999) . '.' . $request->file('Lampiran')->getClientOriginalExtension();
        $doc->move(public_path() . '/Foto', $nmdoc);
    
        // Mengambil waktu saat ini dari input tersembunyi
        $created_at = $request->input('created_at');
    
        presensi::create([
            'Id_user' => $request->Id_user,
            'Keterangan' => $request->Keterangan,
            'Waktu' => $created_at,
            'Lampiran' => $nmdoc,
        ]);
    
        return redirect('Presensiuser')->with('success', 'Izin berhasil disimpan.');
    }
    

    /**
     * Display the specified resource.
     */
    public function Tampilhalamanmasukkeluar()
{
    $presensi = presensi::with('User')->get();
    $mkMasuk = $presensi->where('Keterangan', 'Masuk');
    $mkKeluar = $presensi->where('Keterangan', 'Keluar');

    return view('Halamanpresensi.Masukkeluar', compact('mkMasuk', 'mkKeluar'));
}


    /**
     * Show the form for editing the specified resource.
     */
  // Sesuaikan dengan namespace model Presensi Anda

    public function simpanPresensiMasuk(Request $request)
    {
        
        // Mengambil pengguna yang saat ini login
        $user = auth()->user();
    
        // Mengambil nama pengguna
        $nama = $user->id;
    
        // Simpan data presensi masuk ke dalam tabel
        $Presensis = new Presensi();
        $Presensis->Id_user = $nama;
        $Presensis->Keterangan = 'Masuk';
        $Presensis->Waktu = now();
        $Presensis->save();
    
        return redirect()->route('Presensiuser')->with('success', 'Presensi masuk berhasil disimpan.');
    }
    
    
    

    /**
     * Update the specified resource in storage.
     */
    public function simpanPresensiKeluar(Request $request)
    {
        
        // Mengambil pengguna yang saat ini login
        $user = auth()->user();
    
        // Mengambil nama pengguna
        $nama = $user->id;
    
        // Simpan data presensi masuk ke dalam tabel
        $Presensis = new Presensi();
        $Presensis->Id_user = $nama;
        $Presensis->Keterangan = 'Keluar';
        $Presensis->Waktu = now();
        $Presensis->save();
    
        return redirect()->route('Presensiuser')->with('success', 'Presensi keluat berhasil disimpan.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function hapuspresensi($id)
    {
        $varprs = presensi::findOrFail($id);
        $varprs->delete();
        return back();
    }
}
