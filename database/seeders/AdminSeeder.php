<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
            'name' => 'Farhan',
            'username' => 'farhan136',
            'password' => 'farhan136',
        ]);
    }
}
