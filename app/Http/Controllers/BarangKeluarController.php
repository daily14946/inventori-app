<?php

namespace App\Http\Controllers;

use App\Models\BarangKeluar;
use App\Models\InventoriAplikasi;
use Illuminate\Http\Request;

class BarangKeluarController extends Controller
{
   public function index()
{
    $transaksi = BarangKeluar::with('barang')->get();

    return view('barang_keluar.index', compact('transaksi'));
}

  public function create()
{
    $barang = InventoriAplikasi::all();

    return view('barang_keluar.create', compact('barang'));
}

    public function store(Request $request)
    {
        $barang = InventoriAplikasi::findOrFail($request->barang_id);

        if ($barang->jumlah_barang < $request->jumlah_keluar) {
            return back()->with('error', 'Stok tidak mencukupi');
        }

        BarangKeluar::create([
            'barang_id' => $request->barang_id,
            'jumlah_keluar' => $request->jumlah_keluar,
            'tanggal_keluar' => $request->tanggal_keluar,
        ]);

        $barang->jumlah_barang =
            $barang->jumlah_barang - $request->jumlah_keluar;

        $barang->save();

        return redirect('/barang-keluar');
    }
}