<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventoriAplikasiController;

Route::get('/', [InventoriAplikasiController::class, 'index']);

Route::get('/create', [InventoriAplikasiController::class, 'create']);

Route::post('/store', [InventoriAplikasiController::class, 'store']);