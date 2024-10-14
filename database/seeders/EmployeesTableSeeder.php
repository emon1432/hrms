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
                'user_id' => 5,
                'organization_id' => 1,
                'first_name' => 'Jony',
                'last_name' => 'Martin',
                'email' => 'teamjonymartin@gmail.com',
                'phone' => '01770701555',
                'join_date' => '2024-10-08',
                'salary' => '80k',
                'designation' => '9',
                'image' => 'uploads/users/jony-martin1728876464670c8fb04fa8c.webp',
                'created_by' => 1,
                'updated_by' => NULL,
                'view_count' => 0,
                'created_at' => '2024-10-14 03:27:44',
                'updated_at' => '2024-10-14 03:27:44',
            ),
        ));
        
        
    }
}