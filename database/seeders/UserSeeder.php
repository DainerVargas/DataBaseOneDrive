<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Dainer Vargas',
            'email' => 'dainer2607@gmail.com',
            'password' => Hash::make('vargas2607'),
            'gender_id' => '1',
            'rol_id' => '1',
        ]);
    }
}
