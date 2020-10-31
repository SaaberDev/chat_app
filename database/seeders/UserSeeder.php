<?php

namespace Database\Seeders;

use App\Models\User;
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
        $users = [
            [
                'name' => 'Mahfuzur Rahman Saber',
                'email' => 'saaberdev@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('123456'), // password
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Faria Fairoz Sapti',
                'email' => 'sapti@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('123456'), // password
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        foreach ($users as $user)
        User::create($user);
    }
}
