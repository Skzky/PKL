<?php

namespace App\Http\Controllers;
use App\Models\Presensi;
use Illuminate\Http\Request;

class laporancontroller extends Controller
{
    public function halamancetak(){
        $ct=presensi::all();
        return view ('Halamanlaporan.cetak', compact('ct'));
    }

    public function Tampilhalamanlaporan()
    {
        $pt=presensi::all();
        return view ('Halamanlaporan.laporan', compact('pt'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function hapuslaporan($id)
    {
        $varlaporan = presensi::findOrFail($id);
        $varlaporan->delete();
        return back();
    }
}
