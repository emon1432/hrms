<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('employees')->delete();
        
        \DB::table('employees')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 4,
                'organization_id' => 1,
                'first_name' => 'Bethany',
                'last_name' => 'Perez',
                'email' => 'takeru@mailinator.com',
            'phone' => '+1 (594) 375-3767',
                'image' => 'uploads/users/bethany-perez17285594816707b97968502.webp',
                'created_at' => '2024-10-10 11:24:41',
                'updated_at' => '2024-10-10 11:24:41',
            ),
        ));
        
        
    }
}