<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Provil;

class ProvilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provil = 
        [
	        'id'=>1,
	        'tentang'=> 'Website Villaku adalah sebuah website yang menawarkan pengalaman menginap yang sulit terlupakan.',
	        'instagram'=>'ffaarrhhaanns',
	        'alamat'=>'Jalan Salemba Raya, Jakarta Pusat, DKI Jakarta, Indonesia',
	        'wa'=>'085723193141'	
        ];
    	Provil::create($provil);
    }
}
