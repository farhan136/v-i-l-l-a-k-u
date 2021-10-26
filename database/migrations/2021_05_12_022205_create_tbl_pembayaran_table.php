<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblPembayaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_pembayaran', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('pemesanan_id');
            $table->integer('user_id');
            $table->string('nama_pengirim', 255);
            $table->string('no_pengirim', 12);
            $table->date('mulai')->useCurrent();
            $table->date('selesai')->useCurrent();
            $table->integer('malam');
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
        Schema::dropIfExists('tbl_pembayaran');
    }
}
