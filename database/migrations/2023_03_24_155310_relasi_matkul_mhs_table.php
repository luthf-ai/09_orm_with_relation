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
        Schema::table('mahasiswas', function (Blueprint $table) {
            // many to many matakuliah
            $table->unsignedBigInteger('matakuliah_id')->nullable();
            $table->foreign('matakuliah_id')->references('id')->on('matakuliah');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('mahasiswas', function (Blueprint $table) {
            $table->dropForeign(['matakuliah_id']);
            $table->dropColumn('matakuliah_id');
        });
    }
};
