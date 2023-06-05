<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Http\Controllers\PasienController;
use App\Http\Controllers\RekamMedisController;

Route::get('/', function () {
    return view('welcome');
});


// Pasien
Route::get('/pasien', [PasienController::class, 'index'])->name('menu.pasien.index');
Route::get('/pasien/create', [PasienController::class, 'create'])->name('menu.pasien.create');
Route::post('/pasien', [PasienController::class,'store'])->name('menu.pasien.store');

// Rekam Medis
Route::get('/rekam-medis/{pasienId}', [RekamMedisController::class, 'index'])->name('menu.rekam-medis.index');
