<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_admin')->insert([
            'id'=>1,
            'nama' => 'Farhan Anshari',
            'username' => 'farhan136',
            'password' => bcrypt('kepokepo'),
        ]);
    }
}
