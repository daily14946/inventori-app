<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventoriAplikasiController;
use App\Http\Controllers\BarangKeluarController;

Route::get('/', [InventoriAplikasiController::class, 'index']);

Route::get('/create', [InventoriAplikasiController::class, 'create']);

Route::post('/store', [InventoriAplikasiController::class, 'store']);

Route::get('/edit/{id}', [InventoriAplikasiController::class, 'edit']);

Route::put('/update/{id}', [InventoriAplikasiController::class, 'update']);

Route::delete('/delete/{id}', [InventoriAplikasiController::class, 'destroy']);

Route::get('/barang-keluar', [BarangKeluarController::class, 'index']);

Route::get('/barang-keluar/create', [BarangKeluarController::class, 'create']);

Route::post('/barang-keluar/store', [BarangKeluarController::class, 'store']);