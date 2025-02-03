<?php

Namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin', 
            'email' => 'admin@gmail.com', 
            'email_verified_at' => now(), 
            'password' => Hash::make('password'), 
            'remember_token' => null, 
            'created_at' => now(), 
            'updated_at' => now(), 
        ]);
    }
}