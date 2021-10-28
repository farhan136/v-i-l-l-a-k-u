<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToPemesanan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbl_pemesanan', function (Blueprint $table) {
            $table->date('mulai')->nullable();
            $table->date('selesai')->nullable();
            $table->string('malam', 50);
            $table->float('total_harga', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_pemesanan', function (Blueprint $table) {
            //
        });
    }
}
