<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $profile = new Profile();
        $profile->about = 'Desarrollador e ingeniero. Programador principal';
        $profile->job = 'Administrator';
        $profile->country = 'Venezuela';
        $profile->address = 'Calle Las Margaritas #20 Sector el Progreso El Limon';
        $profile->phone = '0424-1335622';
        $profile->email = 'marcoah@gmail.com';
        $profile->user_id = 1;
        $profile->save();
    }
}
