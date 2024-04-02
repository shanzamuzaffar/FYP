<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Shanza Muzaffar',
                'email' => 'shanzamuzaffar292@gmail.com',
                'password' => Hash::make('20-ARID-826')
            ],
            [
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'password' => Hash::make('password1')
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane@example.com',
                'password' => Hash::make('password2')
            ],
            [
                'name' => 'Alice Johnson',
                'email' => 'alice@example.com',
                'password' => Hash::make('password3')
            ],
            [
                'name' => 'Bob Williams',
                'email' => 'bob@example.com',
                'password' => Hash::make('password4')
            ],
            // Add more users as needed
        ];

        // Loop through the users array and insert each user into the database
        foreach ($users as $userData) {
            User::create($userData);
        }
    }
}
