<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToPembayaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbl_pembayaran', function (Blueprint $table) {
            // $table->string('metode_bayar')->default('MIDTRANS');
            // $table->string('status')->default('PENDING');
            $table->string('url')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_pembayaran', function (Blueprint $table) {
            //
        });
    }
}
