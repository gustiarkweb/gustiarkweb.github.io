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
        Schema::create('nilais', function (Blueprint $table) {
            $table->id();
            $table->integer('users_id');
            $table->integer('kkm')->default(70);
            $table->text('deskripsi_a')->nullable();
            $table->text('deskripsi_b')->nullable();
            $table->text('deskripsi_c')->nullable();
            $table->text('deskripsi_d')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilais');
    }
};
