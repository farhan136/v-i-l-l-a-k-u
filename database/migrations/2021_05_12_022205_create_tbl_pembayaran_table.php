<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblPembayaranTable extends Migration
{

    public function up()
    {
        Schema::create('tbl_pembayaran', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('pemesanan_id');
            $table->string('upload_bukti', 191);
            $table->string('nama_pengirim', 191);
            $table->string('asal_bank', 191);
            $table->string('no_pengirim', 12);
            $table->timestamps()->default('current_timestamp()');
            $table->foreign('pemesanan_id', 'tbl_pembayaran_ibfk_1')->references('id')->on('tbl_pemesanan')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_pembayaran');
    }
}
