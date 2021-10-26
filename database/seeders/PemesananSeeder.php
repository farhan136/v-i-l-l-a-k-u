<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pemesanan;

class PemesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pemesanan = 
        [
        	[
	        	'id'=>1,
	        	'user_id'=>1,
	        	'villa_id'=>13
        	],
        	[
	        	'id'=>2,
	        	'user_id'=>2,
	        	'villa_id'=>15
        	]
        ];
        foreach ($pemesanan as $p) {
        	Pemesanan::create($p);
        }
    }
}
