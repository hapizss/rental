<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipeMobil;

class TipeMobilController extends Controller
{
    function index()
    {
        $datatipe = TipeMobil::get();
        return view('pages.tipe_mobil.index', ['datatipe' => $datatipe]);
    }

    function create()
    {
        return view('pages.tipe_mobil.create');
    }

    function store(Request $request)
    {
        $datatipe = new TipeMobil;
        $datatipe->tipe_mobil = $request->tipe_mobil;
        $datatipe->save();

        return redirect('/tipe_mobil');
    }

    function edit($id)
    {
        $datatipe = TipeMobil::find($id);
        return view('pages.tipe_mobil.edit', ['datatipe' => $datatipe]);
    }

    function update($id, Request $request)
    {
        $datatipe = TipeMobil::find($id);
        $datatipe->tipe_mobil = $request->tipe_mobil;
        $datatipe->save();

        return redirect()->to('/tipe_mobil')->with('success', 'data berhasil diupdate');
    }

    function delete($id, Request $request)
    {
        $datatipe = TipeMobil::find($id);
        $datatipe->delete();

        return redirect()->to('/tipe_mobil')->with('success', 'data berhasil dihapus');
    }
}
