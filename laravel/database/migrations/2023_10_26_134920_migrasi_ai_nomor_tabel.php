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
        DB::statement('ALTER TABLE pasiens ADD nomor_antrean INT NOT NULL AUTO_INCREMENT AFTER tanggal, ADD UNIQUE INDEX (nomor_antrean)');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
