<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InventoriAplikasi extends Model
{
    protected $table = 'inventori_aplikasi';

    protected $fillable = [
        'nama_barang',
        'no_barang',
        'jumlah_barang',
        'jenis_barang',
        'tanggal_masuk_keluar'
    ];

    public $timestamps = false;
}