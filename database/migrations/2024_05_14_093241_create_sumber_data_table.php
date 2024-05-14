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
        Schema::create('sumber_data', function (Blueprint $table) {
            $table->id();
            $table->integer("jumlah_lembaga")->nullable();
            $table->integer("jumlah_guru")->nullable();
            $table->integer("jumlah_peserta")->nullable();
            $table->integer("jumlah_rombel")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sumber_data');
    }
};
