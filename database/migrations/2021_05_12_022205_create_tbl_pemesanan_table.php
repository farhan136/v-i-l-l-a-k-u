<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblPemesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_pemesanan', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('villa_id');
            $table->date('mulai')->default('current_timestamp()');
            $table->date('selesai')->default('current_timestamp()');
            $table->integer('malam');
            $table->integer('total_harga');
            $table->foreign('villa_id', 'tbl_pemesanan_ibfk_1')->references('id')->on('tbl_villa')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('tbl_pemesanan');
    }
}
