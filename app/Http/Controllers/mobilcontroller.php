<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Mobil, Merk, TipeMobil};

class mobilcontroller extends Controller
{
    protected $arrayMobil = [];

    function index()
    {
        // $dataMobil = session()->get('dataMobil');
        // return view('mobil.index', compact('dataMobil'));
        $mobilData = Mobil::all();
        return view('pages.mobil.index', ['mobilData' => $mobilData]);
    }

    function create()
    {
        // return view('mobil.form');
        $MerkData = Merk::get();
        $TipeMobilData = TipeMobil::get();
        return view('pages.mobil.create', compact('MerkData', 'TipeMobilData'));
    }

    function store(Request $request)
    {
        $mobilData = $request->validate([
            'nama_mobil' => 'required',
            'merk_id' => 'required',
            'cc' => 'required',
            'tahun_mobil' => 'required',
            'nomor_polisi' => 'required',
            'warna' => 'required',
            'foto' => 'required',
            'tipe_mobil_id' => 'required',
        ]);

        mobil::create($mobilData);

        return redirect()->to('/mobil')->with('succes', 'data mobil berhasil disimpan');
        // $namaMobil = $request->nama_mobil; 
        // $merkMobil = $request->merk_mobil;
        // $cc = $request->cc;

        // $dataBaru = [
        //     'namaMobil' => $namaMobil,
        //     'merkMobil' => $merkMobil,
        //     'cc' => $cc
        // ];

        // array_push($this->arrayMobil, $dataBaru);

        // return redirect()->to('/mobil')
        // ->with('dataMobil',$this->arrayMobil);
    }
}
