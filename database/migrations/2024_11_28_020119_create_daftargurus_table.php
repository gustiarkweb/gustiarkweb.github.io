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
        Schema::create('daftargurus', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nomorinduk');
            $table->string('jabatan')->nullable();
            $table->longText('alamat')->nullable();
            $table->string('telp')->nullable();
            $table->string('jk')->nullable();
            $table->string('golongan')->nullable();
            $table->string('pendidikanterakhir')->nullable();
            
            $table->string('users_id')->nullable();
            $table->softDeletes();



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftargurus');
    }
};
