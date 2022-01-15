<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('defaultusers')->insert([
            'name' => 'Osama Laden',
            'email' => 'osama.laden@mail.com',
            'password' => Hash::make('osama.laden@mail.com'),
            'profile_img' => 'default_img.jpg',
        ]);
    }
}
