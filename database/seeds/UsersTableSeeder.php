<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'User',
            'email' => 'user@user.com',
            'password' => bcrypt('password'),
        ]);

        User::create([
            'name' => 'Andre',
            'email' => 'andre@andre.com',
            'password' => bcrypt('password'),
        ]);

        User::create([
            'name' => 'Tony Stark',
            'email' => 'tony@avengers.com',
            'password' => bcrypt('password'),
        ]);

        User::create([
            'name' => 'Thor',
            'email' => 'thor@avengers.com',
            'password' => bcrypt('password'),
        ]);

        User::create([
            'name' => 'Administrator',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
        ]);
    }
}
