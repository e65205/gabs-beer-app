<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Tim',
                'email' => 'tim@example.com',
                'password' => Hash::make('password1'),
            ],
            [
                'name' => 'Ben',
                'email' => 'ben@example.com',
                'password' => Hash::make('password2'),
            ],
            [
                'name' => 'Alex',
                'email' => 'alex@example.com',
                'password' => Hash::make('password3'),
            ],
            [
                'name' => 'Jeremy',
                'email' => 'jeremy@example.com',
                'password' => Hash::make('password4'),
            ],
            [
                'name' => 'Matchew',
                'email' => 'matchew@example.com',
                'password' => Hash::make('password5'),
            ],
        ];
        DB::table('users')->insert($users);
    }
}
