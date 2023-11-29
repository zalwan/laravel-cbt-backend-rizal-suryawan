<?php

namespace Database\Seeders;

use Faker\Guesser\Name;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'name' => 'rizal s',
            'email' => 'rizals@fic10.com',
            'password' => Hash::make('1234'),
            'roles' => "SuperUser",
            'phone' => '08123823223'
        ]);
    }
}
