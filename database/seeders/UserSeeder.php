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
        $admin = new User();
        $admin->name = "admin";
        $admin->email= "shanzamuzaffar1215@gmail.com";
        $admin->password = Hash::make('admin123');
        $admin->save();

        $admin->assignRole('admin');
         
$faculty = new User();
$faculty->name = "faculty";
$faculty->email = "faculty@gmail.com";
$faculty->password = Hash::make('faculty123');
$faculty->save();

$faculty->assignRole('faculty');

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
            $user = User::create($userData);
            $user->assignRole('user');
        }
    }
}
