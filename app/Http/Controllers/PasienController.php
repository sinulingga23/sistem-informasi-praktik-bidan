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
        $golonganDarah = [[
            "golonganDarah" => "A",
        ],[
            "golonganDarah" => "B",
        ], [
            "golonganDarah" => "AB",
        ], [
            "golonganDarah" => "O",
        ]];
        return view('pasien.create', ["golonganDarah" => $golonganDarah]);
    }

    public function store(Request $request) {
        // $validatedData = $request->validate([
        //     'title' => ['required', 'unique:posts', 'max:255'],
        //     'body' => ['required'],
        // ]);
        $validatedData = $request->validate([
            'namaDepan' => ['required', 'max:50'],
            'tempatLahir' => ['required', 'max:150'],
            'tanggalLahir' => ['required'],
            'alamat' => ['required', 'max:200'],
        ]);

        dd($validatedData);

        return view('pasien.index');
    }
}
