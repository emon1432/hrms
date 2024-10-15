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
                'user_id' => 6,
                'organization_id' => 1,
                'designation_id' => 2,
                'first_name' => 'Jony',
                'last_name' => 'Martin',
                'email' => 'jony@hrms.com',
                'phone' => '01770701555',
                'join_date' => '2024-10-10',
                'salary' => '80k',
                'image' => 'uploads/employees/jony-martin1728975959670e145700420.webp',
                'created_at' => '2024-10-15 07:05:59',
                'updated_at' => '2024-10-15 07:05:59',
            ),
        ));
        
        
    }
}