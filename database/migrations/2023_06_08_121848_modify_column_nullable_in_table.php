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
        Schema::table('tm_data_pendaftar', function (Blueprint $table) {
            $table->string('nim')->nullable()->default('Dari Luar')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tm_data_pendaftar', function (Blueprint $table) {
            $table->string('nim');
        });
    }
};
