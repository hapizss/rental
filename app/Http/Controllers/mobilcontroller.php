<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mobilcontroller extends Controller
{
    protected $arraymobil = [];
    function index()
    {
        $datamobil = session()->get('datamobil');
        return view('mobil.index', compact('datamobil'));
    }

    function create()
    {
        return view('mobil.form');
    }

    function store(request $request)
    {
        $namamobil = $request->nama_mobil;
        $merkmobil = $request->merk_mobil;
        $cc = $request->cc;

        $databaru = [
            'namamobil' => $namamobil,
            'merkmobil' => $merkmobil,
            'cc' => $cc
        ];

        array_push($this->arraymobil, $databaru);

        return redirect()->to('/mobil')
            ->with('datamobil', $this->arraymobil);
    }
}