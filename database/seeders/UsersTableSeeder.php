<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role' => 'admin',
                'email' => 'admin@hrms.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$UcoPJKT8JUvn3dy1Y2GqEOoBUjGU2ecePkRLQY3z0GLGdBsLOibAK',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'created_at' => '2024-10-10 08:45:15',
                'updated_at' => '2024-10-10 08:45:15',
            ),
            1 => 
            array (
                'id' => 2,
                'role' => 'organization',
                'email' => 'organization@hrms.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$LHMnz5fEvxx.98rijS.RSOodLwPwOuxCJD/ZIVKP5pDFoMS4QE.ki',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'created_at' => '2024-10-10 08:44:04',
                'updated_at' => '2024-10-10 08:44:04',
            ),
            2 => 
            array (
                'id' => 3,
                'role' => 'candidate',
                'email' => 'candidate@hrms.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$kj..ctbxuy6LXp0XrgsGzeLTJnL5X6wRGbfSit/pvwv89V2b8gvsK',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'created_at' => '2024-10-10 08:42:27',
                'updated_at' => '2024-10-10 08:42:27',
            ),
        ));
        
        
    }
}