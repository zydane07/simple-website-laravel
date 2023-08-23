<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
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
        //
        User::insert([
            'name' => 'Muhammad Zydane',
            'email' => 'zyzyyz@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make("123"), // password
            'remember_token' => Str::random(10),
            'address_id' => 1
        ]);
        // \App\Models\User::factory(2)->create();
    }
}
