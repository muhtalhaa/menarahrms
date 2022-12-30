<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'company_id' => 1,
            'uuid' => Str::uuid(),
            'name' => 'Ashif Ahmad',
            'nik' => '1234567890',
            'email' => 'ashifahmadhakim@gmail.com',
            'password' => Hash::make('12345678'),
            'email_verified_at' => now(),
            'joined_at' => now(),
            'status' => true,
            'client_ip' => '127.0.0.1',
            'last_login_at' => now(),
        ])->assignRole('Super Admin');

        User::create([
            'company_id' => 1,
            'uuid' => Str::uuid(),
            'name' => 'Ismail',
            'nik' => '1234567890',
            'email' => 'ismairacle@gmail.com',
            'password' => Hash::make('12345678'),
            'joined_at' => now(),
            'status' => false,
            'client_ip' => '127.0.0.1',
            'last_login_at' => now(),
        ])->assignRole('Super Admin');

        User::create([
            'company_id' => 1,
            'uuid' => Str::uuid(),
            'name' => 'Muhammad Talha',
            'nik' => '1234567890',
            'email' => 'muhtalha@gmail.com',
            'password' => Hash::make('12345678'),
            'email_verified_at' => now(),
            'joined_at' => now(),
            'status' => true,
            'client_ip' => '127.0.0.1',
            'last_login_at' => now(),
        ])->assignRole('Super Admin');
    }
}