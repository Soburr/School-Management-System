<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
   
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Test',
            'email' => 'Test@test.com',
            'password' => Hash::make('Password'),
        ]);
    }
}
