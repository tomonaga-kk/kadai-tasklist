<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 1; $i <= 10; $i++){
            DB::table('users')->insert([
                'name'     => 'testuser' . $i,
                'email'    => 'testuser' . $i . '@test.test',
                'password' => Hash::make('testuser'),
            ]);
        }
    }
}
