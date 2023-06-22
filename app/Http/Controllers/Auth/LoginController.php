<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    //memanggil form login
    function index()
    {
        return view('pages.auth.login');
    }

    //memproses login 
    function login(request $request)
    {
        //validasi user 
        $validateLogin = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        //proses login, cek database apakah inputan sesuai dengan yang ada 
        if (Auth::attempt($validateLogin)) {
            //redirect
            return redirect()->to('/merk');
        } else {
            return redirect()->back();
        }
    }

    function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->to('/login');
    }
}