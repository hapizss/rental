<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    //memanggil foem regis
    function index()
    {
        return view('pages.auth.register');
    }

    //memproses register user
    function register(request $request)
    {
        // validasi
        $validateUser = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:8',
            'contact' => 'required'
        ]);
        //proses simpan data 
        $userData = new user;
        $userData->name = $request->name;
        $userData->email = $request->email;
        $userData->contact = $request->contact;
        $userData->password = bcrypt($request->password);
        $userData->save();
        //alih halaman
        return redirect()->to('login')->with('sukess', 'registrasi berhasil');
    }
}