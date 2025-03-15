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
        //
        $user = new User();
        $user->username = 'marcoah';
        $user->firstname = 'Marco';
        $user->lastname = 'Hernandez';
        $user->profile_id = 1;
        $user->password = Hash::make('marcoa1*');
        $user->email = 'marcoah@gmail.com';
        $user->save();
        $user->assignRole('super-admin');
    }
}
