<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index() {
        $listPasien = [];

        $listPasien[] = [
            "code" => "ABD232",
            "namaLengkap"=> "John Doe",
            "tanggalLahir" => "10/10/2023",
            "jenisKelamin" => "Laki - Laki",
            "golonganDarah" => "A",
            "noHandphonePasien" => "012345678901",
            "noHandphonePendampingPasien" => "098765432101"
        ];

        $listPasien[] = [
            "code" => "ABD235",
            "namaLengkap"=> "Steven",
            "tanggalLahir" => "10/10/2023",
            "jenisKelamin" => "Laki - Laki",
            "golonganDarah" => "A",
            "noHandphonePasien" => "012345678901",
            "noHandphonePendampingPasien" => "-",
        ];

        $listPasien[] = [
            "code" => "ABD236",
            "namaLengkap"=> "Steven",
            "tanggalLahir" => "10/10/2023",
            "jenisKelamin" => "Laki - Laki",
            "golonganDarah" => "A",
            "noHandphonePasien" => "012345678901",
            "noHandphonePendampingPasien" => "-",
        ];

        return view('pasien.index', ['listPasien' => $listPasien]);
    }

    public function create() {
        return view('pasien.create');
    }
}
