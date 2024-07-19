<?php

namespace App\Http\Controllers;
use App\Models\peminjam;

use Illuminate\Http\Request;

class PeminjamAzmiController extends Controller
{
    public function index()
    {
        $peminjam = peminjam::get();
       return view('peminjam.index', compact('peminjam'));
    }

    public function create()
    {
       return view ('peminjam.add');
    }

    public function store(Request $request)
    {
        $peminjam = new peminjam();
        $peminjam->id_peminjaman = $request->id_peminjaman;
        $peminjam->tgl_pinjam = $request->tgl_pinjam;
        $peminjam->tgl_kembali = $request->tgl_kembali;
        $peminjam->id_buku = $request->id_buku;
        $peminjam->id_anggota = $request->id_anggota;
        $peminjam->status = $request->status;
        $peminjam->save();
        return redirect()->route('peminjam.index');
    }


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        $peminjam = peminjam::find($id);
        return view('peminjam.edit', compact('peminjam'));
    }

    public function update(Request $request, string $id)
    {
        $peminjam = peminjam::find($id);
        $peminjam->id_peminjaman = $request->id_peminjaman;
        $peminjam->tgl_pinjam = $request->tgl_pinjam;
        $peminjam->tgl_kembali = $request->tgl_kembali;
        $peminjam->id_buku = $request->id_buku;
        $peminjam->id_anggota = $request->id_anggota;
        $peminjam->status = $request->status;
        $peminjam->update();
        return redirect()->route('peminjam.index');
    }


    public function destroy(string $id)
    {
        peminjam::destroy($id);
         return redirect()->route('peminjam.index');
    }
}