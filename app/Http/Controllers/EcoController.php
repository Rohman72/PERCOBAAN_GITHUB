<?php

namespace App\Http\Controllers;

use App\Models\ecos;
use Illuminate\Http\Request;

class EcoController extends Controller
{
    public function index()
    {
        $ecos = ecos::all();
        return view('barang.index', compact('ecos'));
    }
    public function create()
    {
        return view('barang.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required|unique:ecos',
            'nama' => 'required',
            'harga' => 'required',
        ]);
        ecos::create($request->all());
        return redirect()->route('barang.index')
            ->with('success', 'Eco berhasil ditambahkan');
    }
    public function edit($id)
    {
        $eco = ecos::find($id);
        return view('barang.edit', compact('eco'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required',
        ]);
        $eco = ecos::find($id);
        $eco->update($request->all());
        return redirect()->route('barang.index')
            ->with('success', 'barang berhasil diperbarui');
    }
    public function destroy($id)
    {
        $eco = ecos::find($id);
        $eco->delete();
        return redirect()->route('barang.index')
            ->with('success', 'barang berhasil dihapus');
    }

}
