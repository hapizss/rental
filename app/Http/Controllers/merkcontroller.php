<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class merkcontroller extends Controller
{
    function index()
    {
        return view('pages.merk.index');
    }
}