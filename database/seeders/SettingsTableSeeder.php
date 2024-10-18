<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'site_name' => 'HRMS',
                'site_title' => 'HRMS',
                'logo' => '',
                'favicon' => NULL,
                'address' => 'Dhaka, Bangladesh',
                'phone' => '88011111111',
                'email' => 'hrms@gmail.com',
                'facebook' => '#',
                'twitter' => '#',
                'instagram' => '#',
                'linkedin' => '#',
                'meta_title' => NULL,
                'meta_description' => NULL,
                'meta_keywords' => NULL,
                'about_us' => NULL,
                'privacy_policy' => 'Reiciendis explicab',
                'terms_and_conditions' => 'Nam quis alias aper',
                'created_at' => NULL,
                'updated_at' => '2024-10-18 09:14:58',
            ),
        ));
        
        
    }
}