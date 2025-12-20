<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Parfum;

class VisitorController extends Controller
{
    //tampilkan halaman home untuk pengunjung
    public function homeVisit(){
        $parfum = Parfum::orderby('id', 'desc')
        ->limit(3)
        ->get();
        return view('homeVisit', ['dataParfum'=> $parfum]);
    }

    public function hasilCari(Request $request){
        $cari = $request->input('cari');
        $parfum = Parfum::where('namaParfum', 'LIKE', "%$cari%")
        ->orderby('id', 'desc')
        ->get();
        return view('hasilCari', ['datacari'=> $parfum]);
    }

    public function register(){
        return view('register');
    }

    public function simpanregis(Request $request){
        //validasi
        $request->validate([
            'name'=>'required|min:3|max:50',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:6|max:20'
        ]);

        //simpan data
        $user = new \App\User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role = 'pengunjung';
        $user->save();

        return redirect('/login')->with('success', 'Registrasi berhasil, silahkan login');
    }
}
