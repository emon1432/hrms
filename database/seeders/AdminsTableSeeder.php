<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admins')->delete();
        
        \DB::table('admins')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'first_name' => 'Khairul Islam',
                'last_name' => 'Emon',
                'email' => 'admin@hrms.com',
                'phone' => '01638849305',
                'image' => NULL,
                'created_at' => '2024-10-10 08:45:15',
                'updated_at' => '2024-10-10 08:45:15',
            ),
        ));
        
        
    }
}