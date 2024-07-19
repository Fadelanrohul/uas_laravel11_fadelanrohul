<?php

namespace App\Http\Controllers;
use App\Models\anggota;

use Illuminate\Http\Request;

class AnggotaAzmiController extends Controller
{
    public function index()
    {
        $anggota = anggota::get();
       return view('anggota.index', compact('anggota'));
    }

    public function create()
    {
       return view ('anggota.add');
    }

    public function store(Request $request)
    {
        $anggota = new anggota();
        $anggota->id_anggota = $request->id_anggota;
        $anggota->nama_anggota = $request->nama_anggota;
        $anggota->alamat = $request->alamat;
        $anggota->save();
        return redirect()->route('anggota.index');
    }


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        $anggota = anggota::find($id);
        return view('anggota.edit', compact('anggota'));
    }

    public function update(Request $request, string $id)
    {
        $anggota = anggota::find($id);
        $anggota->id_anggota = $request->id_anggota;
        $anggota->nama_anggota = $request->nama_anggota;
        $anggota->alamat = $request->alamat;
        $anggota->update();
        return redirect()->route('anggota.index');
    }


    public function destroy(string $id)
    {
        anggota::destroy($id);
         return redirect()->route('anggota.index');
    }
}