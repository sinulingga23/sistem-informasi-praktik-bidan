<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pasien extends Model
{
    use HasFactory;
    use HasUuids;

    protected $table = 'pasien';
    protected $primaryKey = 'pasien_id';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $guarded = [];


    protected function initCodePasien(): string {
        $queryTotal = DB::select('select count(pasien_id) as total from pasien');
        $total = $queryTotal[0]->total;
        $formatCode = "P000";

        $digits = $total;
        $totalDigit = 0;

        while ((int)$total != 0) {
            (int)$total = (int)$total / (int)10;
            $totalDigit += 1;
        }

        $digits += 1;
        $newCode = substr($formatCode,0,strlen($formatCode)-$totalDigit) . strval($digits);
        return $newCode;
    }
}
