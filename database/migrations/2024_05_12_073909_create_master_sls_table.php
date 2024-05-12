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
        Schema::create('master_sls', function (Blueprint $table) {
            $table->id();
            $table->string("id_prov");
            $table->string("id_kabkot");
            $table->string("id_kec");
            $table->string("id_des_kel");
            $table->string("provins");
            $table->string("kabkot");
            $table->string("kecamatan");
            $table->string("des_kel");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master_sls');
    }
};
