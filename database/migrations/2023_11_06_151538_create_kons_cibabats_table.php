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
        Schema::create('kons_cibabats', function (Blueprint $table) {
            $table->id();
            $table->string('tps')->nullable();
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            $table->string('koordinator')->nullable();
            $table->string('konstituen')->nullable();
            $table->string('phone')->nullable();
            $table->string('ktp')->nullable();
            $table->string('kelurahan')->default('CIBABAT');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kons_cibabats');
    }
};
