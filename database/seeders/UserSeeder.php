<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = 
        [
        	[
	        	'id'=>1,
	        	'name'=> 'Farhan',
	        	'email'=>'fanshari62@gmail.com',
	        	'roles'=>'USER',
	        	'password'=>bcrypt('kepobangetlu136'),
	        	'pekerjaan'=> 'Mahasiswa',
	        	'photo'=>'profile2.jpg'
        	],
        	[
	        	'id'=>2,
	        	'name'=> 'Anshari',
	        	'email'=>'farhanshr346@gmail.com',
	        	'roles'=>'USER',
	        	'password'=>bcrypt('kepokepo'),
	        	'pekerjaan'=> 'Mahasiswa',
	        	'photo'=>'foto1.jpg'
        	]
        ];
        foreach ($user as $u) {
        	User::create($u);
        }

    }
}
