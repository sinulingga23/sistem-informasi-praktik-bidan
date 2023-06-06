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
Route::get('/rekam-medis/keluarga-berencana', [RekamMedisController::class, 'showRekamMedisKeluargaBerencana'])
    ->name('menu.rekam-medis.keluarga-berencana');
Route::get('/rekam-medis/antenatal-care',[RekamMedisController::class, 'showRekamMedisAntenatalCare'])
    ->name('menu.rekam-medis.antenatal-care');
Route::get('/rekam-medis/persalinan', [RekamMedisController::class, 'showRekamMedisPersalinan'])
    ->name('menu.rekam-medis.persalinan');
Route::get('/rekam-medis/nifas', [RekamMedisController::class, 'showRekamMedisNifas'])
    ->name('menu.rekam-medis.nifas');
Route::get('/rekam-medis/bayi', [RekamMedisController::class, 'showRekamMedisBayi'])
    ->name('menu.rekam-medis.bayi');
Route::get('/rekam-medis/umum', [RekamMedisController::class, 'showRekamMedisUmum'])
    ->name('menu.rekam-medis.umum');
Route::get('/rekam-medis/{pasienId}', [RekamMedisController::class, 'index'])
    ->name('menu.rekam-medis.index');

