<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RekamMedisController extends Controller
{
    public function index($pasienId) {
        return view("rekam-medis.index");
    }

    public function showRekamMedisKeluargaBerencana() {
        return view("rekam-medis.keluarga_berencana");
    }

    public function showRekamMedisAntenatalCare() {
        return view("rekam-medis.antenatal_care");
    }

    public function showRekamMedisPersalinan() {
        return view("rekam-medis.persalinan");
    }

    public function showRekamMedisNifas() {
        return view("rekam-medis.nifas");
    }

    public function showRekamMedisBayi() {
        return view("rekam-medis.bayi");
    }

    public function showRekamMedisUmum() {
        return view("rekam-medis.umum");
    }
}
