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
                'slug' => 'Wanit',
                'type' => 'Software Development',
                'email' => 'organization@hrms.com',
                'phone' => '01521437220',
                'image' => NULL,
                'address' => NULL,
                'created_at' => '2024-10-10 08:44:04',
                'updated_at' => '2024-10-10 08:44:04',
            ),
        ));
        
        
    }
}