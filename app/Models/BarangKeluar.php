<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BarangKeluar extends Model
{
    protected $table = 'barang_keluar';

    protected $fillable = [
        'barang_id',
        'jumlah_keluar',
        'tanggal_keluar'
    ];

    public function barang()
    {
        return $this->belongsTo(InventoriAplikasi::class, 'barang_id');
    }
}