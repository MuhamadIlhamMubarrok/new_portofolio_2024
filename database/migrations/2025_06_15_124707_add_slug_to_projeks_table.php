<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('projeks', function (Blueprint $table) {
            $table->string('slug')->unique()->after('nama'); // sesuaikan 'nama' jika ingin disisipkan di posisi tertentu
        });
    }

    public function down(): void
    {
        Schema::table('projeks', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
    }
};
