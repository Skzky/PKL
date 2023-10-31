<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\jabatan;
use App\Models\User;
use Illuminate\Http\Request;

class pegawaicontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function tampilhalamanpegawai()
    {
        
        $pg=pegawai::with('jabatan')->get();
        return view ('Halamanpegawai.pegawai',compact('pg'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function tampiltambahpegawai()
    {
        $jbt=jabatan::all();
        return view ('Halamanpegawai.tambahpegawai', compact ('jbt'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function simpanpegawai(Request $request)
    {
        $request->validate([
            'Foto'=>'required|file|mimes:pdf,doc,jpg,png,jpeg,docx|max:2048,'
        ]);
        $doc =$request->file('Foto');

        $nmdoc = time().rand(100,999).'.'.$request->file('Foto')->getClientOriginalExtension();

        $doc->move(public_path().'/Foto',$nmdoc);

        pegawai::create([
            'NIP' => $request->NIP,
            'Nama_Lengkap' => $request->Nama_Lengkap,
            'id_jabatan' => $request->id_jabatan,
            'Tempat' => $request->Tempat,
            'Tgl' => $request->Tgl,
            'Alamat' => $request->Alamat,
            'Agama' => $request->Agama,
            'No_Telp' => $request->No_Telp,
            'Jenis_Kelamin' => $request->Jenis_Kelamin,
            'Foto' => $nmdoc,
            'delstatus' => true,
        ]);

        return redirect('Pegawai');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function Tampilhalamanupdatepegawai($id)
    {
        $upd = pegawai::findOrfail ($id);
        $jbt = jabatan::all();

        return view ('Halamanpegawai.updatepgw', compact('upd','jbt'));
    }

    public function updatepegawai(Request $request,$id)
   
    {
        

        $spn = pegawai::findOrfail ($id);

            $pegawai = [
            'NIP' => $request->NIP,
            'Nama_Lengkap' => $request->Nama_Lengkap,
            'Id_jabatan' => $request->Id_jabatan,
            'id_user' => $request->id_user,
            'Tempat' => $request->Tempat,
            'Tgl' => $request->Tgl,
            'Alamat' => $request->Alamat,
            'Agama' => $request->Agama,
            'No_Telp' => $request->No_Telp,
            'Jenis_Kelamin' => $request->Jenis_Kelamin,
            'Foto' => nmdoc,
            'delstatus' => true,
        ];

       $spn->update($pegawai);
        return redirect('pegawai');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function hapuspegawai($id)
    {
        $varpegawai = pegawai::findOrFail($id);
        $varpegawai->delete();
        return back();
    }
}
