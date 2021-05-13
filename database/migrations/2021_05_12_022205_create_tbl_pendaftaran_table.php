<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblPendaftaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_pendaftaran', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('foto_utama', 191);
            $table->string('foto_indoor', 191);
            $table->string('foto_outdoor', 191);
            $table->string('villa', 191);
            $table->string('alamat', 191);
            $table->string('provinsi', 191);
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
        Schema::dropIfExists('tbl_pendaftaran');
    }
}
