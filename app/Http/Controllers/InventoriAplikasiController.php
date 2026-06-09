<?php

namespace App\Http\Controllers;

use App\Models\InventoriAplikasi;
use Illuminate\Http\Request;

class InventoriAplikasiController extends Controller
{
    public function index()
    {
        $barang = InventoriAplikasi::all();

        return view('inventori.index', compact('barang'));
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
}