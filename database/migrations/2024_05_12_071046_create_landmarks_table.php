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
        Schema::create('landmarks', function (Blueprint $table) {
            $table->id();
            $table->string('kode_prov');
            $table->string('kode_kabkot');
            $table->string('kode_kecamatan');
            $table->string('kode_desa');
            $table->string('id_prov');
            $table->string('id_kabupaten');
            $table->string('id_kecamatan');
            $table->string('id_desa');
            $table->string('kategori_1');
            $table->string('kategori_2');
            $table->string('foto_url');
            $table->string('long');
            $table->string('lat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('landmarks');
    }
};
