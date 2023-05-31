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
        Schema::create('pasien', function (Blueprint $table) {
            $table->uuid('pasien_id');
            $table->string('golongan_darah', 5);
            $table->string('jenis_kelamin', 1)->nullable(false);
            $table->date('tanggal_lahir')->nullable(false);
            $table->text('alamat')->nullable(false);
            $table->string('no_handphone_pasien', 16)->nullable(true);
            $table->string('no_handphone_pendamping_pasien')->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('pasien');
    }
};
