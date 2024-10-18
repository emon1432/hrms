<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrganizationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('organizations')->delete();
        
        \DB::table('organizations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 2,
                'name' => 'Wanit',
                'type' => 'Software Development',
                'slug' => 'Wanit',
                'email' => 'organization@hrms.com',
                'phone' => '01521437220',
                'logo' => NULL,
                'banner' => NULL,
                'address' => NULL,
                'size' => NULL,
                'website_link' => NULL,
                'about' => NULL,
                'created_at' => '2024-10-10 08:44:04',
                'updated_at' => '2024-10-10 08:44:04',
            ),
        ));
        
        
    }
}