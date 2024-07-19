<?php

namespace App\Http\Controllers;
use App\Models\penerbit;

use Illuminate\Http\Request;

class PenerbitAzmiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penerbit = penerbit::get();
        return view('penerbit.index', compact('penerbit'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('penerbit.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $penerbit = new penerbit();
        $penerbit->id_penerbit = $request->id_penerbit;
        $penerbit->nama_penerbi = $request->nama_penerbi;
        $penerbit->kota = $request->kota;
        $penerbit->save();
        return redirect()->route('penerbit.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $penerbit = penerbit::find($id);
        return view('penerbit.edit', compact('penerbit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $penerbit = penerbit::find($id);
        $penerbit->id_penerbit = $request->id_penerbit;
        $penerbit->nama_penerbi = $request->nama_penerbi;
        $penerbit->kota = $request->kota;
        $penerbit->update();
        return redirect()->route('penerbit.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        penerbit::destroy($id);
        return redirect()->route('penerbit.index');
    }
}
