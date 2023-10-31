<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class logincontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function Halamanlogin()
    {
        return view('Halamanlogin.login');
    }

    /**
     * Show the form for creating a new resource.
     */
        public function postlogin(Request $request){
            if (Auth::attempt(
                [
                    'email' => $request->email,
                    'password' => $request->password,
                ]
            )) {
                return redirect('/');
            }
            return redirect('Login');
        }    
 
    public function Halamanregistrasi()
        {
            return view('Halamanlogin.registrasi');
        }
    

    public function simpanregistrasi(Request $request){
        // dd($request->all());

        User::create([
            'nama' => $request->nama,
            'level' => 'pegawai',
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'delstatus' => true,
        ]);

        return redirect('Login');

    }
     public function logout(){
        Auth::logout();
        return redirect ('Login');
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
    public function destroy(string $id)
    {
        //
    }
}
