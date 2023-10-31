<?php

namespace App\Http\Controllers;
use App\Models\jabatan;
use Illuminate\Http\Request;

class jabatancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function tampilhalamanjabatan()
    {
        $jbn=jabatan::all();
        return view('Halamanpegawai.jabatan', compact('jbn'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function Simpanjabatan(request $request)
    {
        jabatan::create([
            'Jabatan' => $request->Jabatan,
        ]);
        return redirect('Jabatan');
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function hapusjabatan($id)
    {
        $varlaporan = jabatan::findOrFail($id);
        $varlaporan->delete();
        return back();
    }
}
