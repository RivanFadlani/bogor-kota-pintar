<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // membuat user superadmin
        $superAdmin = User::firstOrCreate([
            'email' => 'superadmin@example.com'
        ], [
            'name' => 'Super Admin',
            'password' => Hash::make('12345678')
        ]);
        $superAdmin->assignRole('superadmin');

        // membuat user admin
        $admin = User::firstOrCreate([
            'email' => 'admin@example.com'
        ], [
            'name' => 'Admin',
            'password' => Hash::make('12345678')
        ]);
        $admin->assignRole('admin');

        // membuat user operator
        $operator = User::firstOrCreate([
            'email' => 'operator@example.com'
        ], [
            'name' => 'Operator',
            'password' => Hash::make('12345678')
        ]);
        $operator->assignRole('operator');
    }
}
