<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // ลบข้อมูลเดิมในตาราง users (ถ้ามี)
        // User::truncate();

        // User::create([
        //     'name' => 'ผู้ดูแลระบบ',
        //     'email' => 'admin@example.com',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('123456789'),
        //     'remember_token' => null,
        // ]);

        User::updateOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'ผู้ดูแลระบบ',
                'email_verified_at' => now(),
                'password' => Hash::make('123456789'),
                'remember_token' => null,
                'status' => 1,
            ]
        );

        User::updateOrCreate(
            ['email' => 'eservice@example.com'],
            [
                'name' => 'ผู้ดูแลระบบ Eservice',
                'email_verified_at' => now(),
                'password' => Hash::make('123456789'),
                'remember_token' => null,
                'status' => 2,
            ]
        );

        User::updateOrCreate(
            ['email' => 'users@example.com'],
            [
                'name' => 'สมชาย ใจดี',
                'email_verified_at' => now(),
                'password' => Hash::make('123456789'),
                'remember_token' => null,
                'status' => 3,
            ]
        );

        $this->command->info('Users seeded successfully!');
    }
}
