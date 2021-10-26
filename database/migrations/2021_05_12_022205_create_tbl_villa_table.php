<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblVillaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_villa', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('villa', 255);
            $table->string('foto_utama', 255);
            $table->string('foto_indoor', 255);
            $table->string('foto_outdoor', 255);
            $table->string('alamat', 255);
            $table->string('kategori', 255);
            $table->string('stok', 40);
            $table->longText('map');
            $table->longText('deskripsi');
            $table->string('nomor_hp', 12);
            $table->integer('harga');
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
        Schema::dropIfExists('tbl_villa');
    }
}
