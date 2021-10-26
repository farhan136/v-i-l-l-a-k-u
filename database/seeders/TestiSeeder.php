<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Testi;

class TestiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $testi = 
        [
        	[
	        	'id'=>1,
	        	'users_id'=> 1,
	        	'testimoni'=>'Bagus',
	        	'bintang'=>4
        	],
        	[
	        	'id'=>2,
	        	'users_id'=> 2,
	        	'testimoni'=>'Seruu, pokoknya kalian mesti coba',
	        	'bintang'=>5
        	]
        ];
        foreach ($testi as $t) {
        	Testi::create($t);
        }
    }
}
