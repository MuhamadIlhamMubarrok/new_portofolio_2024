<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('projeks', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('banner')->nullable();
            $table->string('alt_banner')->nullable();
            $table->enum("category", ["project team", "personal project", "project at work"])->nullable();
            $table->string('nama')->nullable();
            $table->text('deskripsi')->nullable();
            $table->text('meta_description')->nullable();
            $table->json('memberId')->nullable();
            $table->json('skillId')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projeks');
    }
};
