<?php

namespace App\Http\Controllers;

use App\Models\InventoriAplikasi;
use Illuminate\Http\Request;

class InventoriAplikasiController extends Controller
{
    public function index(Request $request)
    {
        $cari = $request->cari;

        $barang = InventoriAplikasi::when($cari, function ($query, $cari) {
            return $query->where('nama_barang', 'like', "%{$cari}%")
                         ->orWhere('jenis_barang', 'like', "%{$cari}%");
        })->get();

        return view('inventori.index', compact('barang', 'cari'));
    }

    public function create()
    {
        return view('inventori.create');
    }

    public function store(Request $request)
    {
        InventoriAplikasi::create([
            'nama_barang' => $request->nama_barang,
            'no_barang' => $request->no_barang,
            'jumlah_barang' => $request->jumlah_barang,
            'jenis_barang' => $request->jenis_barang,
            'tanggal_masuk_keluar' => $request->tanggal_masuk_keluar,
        ]);

        return redirect('/');
    }

    public function edit($id)
    {
        $barang = InventoriAplikasi::findOrFail($id);

        return view('inventori.edit', compact('barang'));
    }

    public function update(Request $request, $id)
    {
        $barang = InventoriAplikasi::findOrFail($id);

        $barang->update([
            'nama_barang' => $request->nama_barang,
            'no_barang' => $request->no_barang,
            'jumlah_barang' => $request->jumlah_barang,
            'jenis_barang' => $request->jenis_barang,
            'tanggal_masuk_keluar' => $request->tanggal_masuk_keluar,
        ]);

        return redirect('/');
    }

    public function destroy($id)
    {
        $barang = InventoriAplikasi::findOrFail($id);

        $barang->delete();

        return redirect('/');
    }
}