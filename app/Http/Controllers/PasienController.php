<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;

class PasienController extends Controller
{
    public function index() {
        return view('pasien.index', ['listPasien' => $this->getListPasien()]);
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

        $validatedData = $request->validate([
            'namaDepan' => ['required', 'max:50'],
            'tempatLahir' => ['required', 'max:150'],
            'tanggalLahir' => ['required'],
            'alamat' => ['required', 'max:200'],
            'jenisKelamin' => ['required', 'in:L,P'],
            'golonganDarah' => ['in:-,A,B,AB,O'],
        ]);

        $errors = [];

        $noHandphonePasien = $request->input('noHandphonePasien');
        if (!empty($noHandphonePasien)) {
            if (!$this->validatePhoneNumber($noHandphonePasien)) {
                $errors['noHandphonePasien'] = 'No handphone tidak valid.';
            }
        }

        $noHandphonePendampingPasien = $request->input('noHandphonePendampingPasien');
        if (!empty($noHandphonePendampingPasien)) {
            if (!$this->validatePhoneNumber($noHandphonePendampingPasien)) {
                $errors['noHandphonePendampingPasien'] = 'No handphone tidak valid';
            }
        }

        if (!empty($errors)) {
            return redirect()->back()->withErrors($errors)->withInput();
        }

        try {
            Pasien::create([
                'code' => Pasien::initCodePasien(),
                'nama_depan' => $request->input('namaDepan'),
                'nama_belakang' => $request->input('namaBelakang'),
                'golongan_darah' => $request->input('golonganDarah'),
                'jenis_kelamin' => $request->input('jenisKelamin'),
                'tempat_lahir' => $request->input('tempatLahir'),
                'tanggal_lahir' => $request->input('tanggalLahir'),
                'alamat' => $request->input('alamat'),
                'no_handphone_pasien' => $noHandphonePasien,
                'no_handphone_pendamping_pasien' => $noHandphonePendampingPasien,
            ]);

            return view('pasien.index', ['listPasien' => $this->getListPasien()]);
        } catch (\Exception $e) {
            return redirect()->back()->withErrros(['errors' => $e->getMessage()]);
        }
    }

    private function validatePhoneNumber($phoneNumber) {
        $pattern = "/^\+?\d{1,3}[-\s]?\(?\d{1,4}\)?[-\s]?\d{1,4}[-\s]?\d{1,9}$/";
        return preg_match($pattern, $phoneNumber);
    }

    private function getListPasien() {
        return Pasien::paginate(10);
    }
}
