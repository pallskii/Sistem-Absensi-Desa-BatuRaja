<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('password'),
                'role' => 'admin'
            ]);

        User::insert([
            [
                'name' => 'User1',
                'email' => 'user1@gmail.com',
                'password' => bcrypt('password'),
                'role' => 'user'
            ],
            [
                'name' => 'User2',
                'email' => 'user2@gmail.com',
                'password' => bcrypt('password'),
                'role' => 'user'
            ],
            [
                'name' => 'User3',
                'email' => 'user3@gmail.com',
                'password' => bcrypt('password'),
                'role' => 'user'
            ],
            [
                'name' => 'User4',
                'email' => 'user4@gmail.com',
                'password' => bcrypt('password'),
                'role' => 'user'
            ],
            [
                'name' => 'User5',
                'email' => 'user5@gmail.com',
                'password' => bcrypt('password'),
                'role' => 'user'
            ],
            [
                'name' => 'User6',
                'email' => 'user6@gmail.com',
                'password' => bcrypt('password'),
                'role' => 'user'
            ],
            [
                'name' => 'User7',
                'email' => 'user7@gmail.com',
                'password' => bcrypt('password'),
                'role' => 'user'
            ]
            ]);
    }
}
