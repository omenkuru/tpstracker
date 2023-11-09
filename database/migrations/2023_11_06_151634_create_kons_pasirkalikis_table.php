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
        Schema::create('kons_pasirkalikis', function (Blueprint $table) {
            $table->id();
            $table->integer('tps')->nullable();
            $table->integer('rt')->nullable();
            $table->integer('rw')->nullable();
            $table->string('koordinator')->nullable();
            $table->string('konstituen')->nullable();
            $table->string('phone')->nullable();
            $table->string('ktp')->nullable();
            $table->string('kelurahan')->default('PASIRKALIKI');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kons_pasirkalikis');
    }
};
