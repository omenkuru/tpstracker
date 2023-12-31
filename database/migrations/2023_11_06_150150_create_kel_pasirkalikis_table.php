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
        Schema::create('kel_pasirkalikis', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('gender');
            $table->integer('usia');
            $table->string('rt');
            $table->string('rw');
            $table->string('tps');
            $table->string('kelurahan')->default('PASIRKALIKI');
            $table->string('kecamatan')->default('CIMAHI UTARA');
            $table->string('ket')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kel_pasirkalikis');
    }
};
