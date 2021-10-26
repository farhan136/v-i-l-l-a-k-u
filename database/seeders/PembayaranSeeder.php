<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Payment;

class PembayaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $payment = 
        [
        	[
	        	'id'=>1,
	        	'user_id'=> 1,
	        	'pemesanan_id'=>'1',
	        	'nama_pengirim'=>'Farhan',
	        	'no_pengirim'=>'085723193141',
	        	'mulai'=>'2021-08-28',
	        	'selesai'=>'2021-08-31',
	        	'malam'=>3,
	        	'total_harga'=>20000000
        	],
        	[
	        	'id'=>2,
	        	'user_id'=> 2,
	        	'pemesanan_id'=>2,
	        	'nama_pengirim'=>'Anshari',
	        	'no_pengirim'=>'085723193141',
	        	'mulai'=>'2021-08-28',
	        	'selesai'=>'2021-08-31',
	        	'malam'=>3,
	        	'total_harga'=>20000000
        	]
        ];
        foreach ($payment as $p) {
        	Payment::create($p);
        }
    }
}
