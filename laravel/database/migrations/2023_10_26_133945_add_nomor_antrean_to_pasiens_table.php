<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('pasiens', function (Blueprint $table) {
        $table->bigIncrements('nomor_antrean')->after('tanggal');
    });
    DB::statement('ALTER TABLE pasiens ADD nomor_antrean INT NOT NULL AUTO_INCREMENT AFTER tanggal_daftar, ADD UNIQUE INDEX (nomor_antrean)');
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pasiens', function (Blueprint $table) {
            //
        });
    }
};
