<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        // Reset cached roles and permissions
      app()['cache']->forget('spatie.permission.cache');

        // Create roles if they don't exist
        if (!Role::where('name', 'admin')->exists()) {
            Role::create(['name' => 'admin']);
        }

        if (!Role::where('name', 'user')->exists()) {
            Role::create(['name' => 'user']);
        }

        if (!Role::where('name', 'faculty')->exists()) {
            Role::create(['name' => 'faculty']);
        }
    }
}