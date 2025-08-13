<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Profile;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $profile = new Profile();
        $profile->profile_about = 'Desarrollador e ingeniero. Programador principal';
        $profile->profile_job = 'Administrator';
        $profile->profile_country = 'Venezuela';
        $profile->profile_address = 'Calle Las Margaritas #20 Sector el Progreso El Limon';
        $profile->profile_phone = '0424-1335622';
        $profile->profile_email = 'marcoah@gmail.com';
        $profile->user_id = 1;
        $profile->save();
    }
}
