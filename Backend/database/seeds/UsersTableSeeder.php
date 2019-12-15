<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {
        factory(User::class)->create([
            'name' => 'admin',
            'role' => 'admin',
            'email' => 'admin@test.com',
        ]);

        factory(User::class)->create([
            'name' => 'nath',
            'role' => 'admin',
            'email' => 'nath@test.com',
        ]);

        factory(User::class)->create([
            'name' => 'sol',
            'role' => 'admin',
            'email' => 'sol@test.com',
        ]);

        factory(User::class)->create([
            'name' => 'Pierre',
            'email' => 'pierre@test.com',
        ]);
        factory(User::class, 50)->create();
    }
}
