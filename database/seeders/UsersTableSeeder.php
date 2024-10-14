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
                'status' => 1,
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
                'status' => 1,
                'email_verified_at' => NULL,
                'password' => '$2y$12$LHMnz5fEvxx.98rijS.RSOodLwPwOuxCJD/ZIVKP5pDFoMS4QE.ki',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'remember_token' => 'o3LTwsrN5jvcHO7JhigRzvflJmcglb4bDJuY49u9KPD0kfzomkDBlddhh7m3',
                'current_team_id' => NULL,
                'created_at' => '2024-10-10 08:44:04',
                'updated_at' => '2024-10-10 08:44:04',
            ),
            2 => 
            array (
                'id' => 3,
                'role' => 'candidate',
                'email' => 'candidate@hrms.com',
                'status' => 1,
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
            3 => 
            array (
                'id' => 4,
                'role' => 'employee',
                'email' => 'takeru@mailinator.com',
                'status' => 1,
                'email_verified_at' => NULL,
                'password' => '$2y$12$eMpuK31C5d1ZfpghHw2JMuTko4SgaEjevuKh7uadwK6NZN.K3FyGe',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'created_at' => '2024-10-10 11:24:41',
                'updated_at' => '2024-10-10 11:24:41',
            ),
            4 => 
            array (
                'id' => 5,
                'role' => 'employee',
                'email' => 'teamjonymartin@gmail.com',
                'status' => 1,
                'email_verified_at' => NULL,
                'password' => '$2y$12$yaJQOpKmrfpFSr16jznw8ujKDLafxof5oQ9oTO4GoJCMsWDCaG.U.',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'created_at' => '2024-10-14 03:27:44',
                'updated_at' => '2024-10-14 03:27:44',
            ),
        ));
        
        
    }
}