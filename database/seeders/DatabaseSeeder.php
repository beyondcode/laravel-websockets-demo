<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'John Doe',
            'email' => 'john@test.com',
            'password' => bcrypt('123456'),
        ]);

        User::create([
            'name' => 'Bruce Wayne',
            'email' => 'bruce@test.com',
            'password' => bcrypt('123456'),
        ]);

    }
}
