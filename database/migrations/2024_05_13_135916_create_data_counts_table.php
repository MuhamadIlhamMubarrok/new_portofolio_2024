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
        Schema::create('data_counts', function (Blueprint $table) {
            $table->id();
            $table->integer("jumlah_lembaga")->nullable();
            $table->integer("jumlah_guru")->nullable();
            $table->integer("jumlah_peserta")->nullable();
            $table->integer("jumlah_roombeel")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_counts');
    }
};
