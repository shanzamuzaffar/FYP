<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Admin::create([
            'name' => 'Admin1234',
            'password' => bcrypt('39201-3456783-4'), // You should use Hash::make() instead of bcrypt() in Laravel 8 and newer
            // 'is_admin' => true, 
        ]);
    }
}
