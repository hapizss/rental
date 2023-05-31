<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\merk;

class merkcontroller extends Controller
{
    function index()
    {
        $merkdata = merk::get();
        return view('pages.merk.index', ['merkdata' => $merkdata]);
    }

    function create()
    {
        return view('pages.merk.create');
    }

    function store(Request $request)
    {
        $merkdata = new merk;
        $merkdata->merk = $request->merk;
        $merkdata->save();

        return redirect()->to('/merk')->with('success', 'data berhasil disimpan');
    }
}