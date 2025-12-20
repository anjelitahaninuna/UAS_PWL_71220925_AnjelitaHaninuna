<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// ditambahkan 30 November 2025
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //tampilkan halaman login
    public function login(){
        return view('login');
    }

    public function cekLogin(Request $request){
        if(!Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            return redirect('/login')->with('error', 'Email atau Password salah');
        }
        else
        {
            return redirect('/dashboard');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
