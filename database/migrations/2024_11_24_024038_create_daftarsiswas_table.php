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
        Schema::create('daftarsiswas', function (Blueprint $table) {
            $table->id();
            $table->string('nis');
            $table->string('nomor_pendaftaran');
            $table->string('nama_peserta_didik');
            $table->string('jenis_kelamin');
            $table->string('asal_sekolah');
            $table->text('ket');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftarsiswas');
    }
};
