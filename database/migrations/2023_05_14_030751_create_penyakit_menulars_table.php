<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penyakit_menulars', function (Blueprint $table) {
            $table->id();
            $table->string('NamaPenyakit');
            $table->string('TotalPenyakit');
            $table->string('GejalaPenyakit');
            $table->string('PengobatanPenyakit');
            $table->string('PenyebabPenyakit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penyakit_menulars');
    }
};
