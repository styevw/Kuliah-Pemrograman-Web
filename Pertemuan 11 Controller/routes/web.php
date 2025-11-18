<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TanduController;

Route::get('/', [TanduController::class, 'index']);
Route::get('/produk', [TanduController::class, 'produk']);
Route::get('/kontak', [TanduController::class, 'kontak']);