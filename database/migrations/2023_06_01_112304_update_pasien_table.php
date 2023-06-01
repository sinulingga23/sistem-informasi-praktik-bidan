<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('pasien', function(Blueprint $table) {
            $table->string('code', 8)->after('pasien_id');
            $table->string('nama_depan', 50)->after('code');
            $table->string('nama_belakang',50)->nullable(true)->after('nama_depan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
