<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PresensiController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PresensiController::class, 'index']);
Route::post('/presensi', [PresensiController::class, 'presensi']);
