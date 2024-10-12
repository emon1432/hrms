<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EmployeeDesignationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('employee_designations')->delete();
        
        \DB::table('employee_designations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'organization_id' => 1,
                'job_category_id' => 5,
                'designation_name' => 'Ronan Gen',
                'slug' => 'ronan-gen',
                'status' => 1,
                'image' => NULL,
                'created_at' => '2024-10-12 07:02:28',
                'updated_at' => '2024-10-12 12:42:53',
            ),
            1 => 
            array (
                'id' => 4,
                'organization_id' => 1,
                'job_category_id' => 5,
                'designation_name' => 'Dotson',
                'slug' => 'dotson',
                'status' => 1,
                'image' => NULL,
                'created_at' => '2024-10-12 07:09:36',
                'updated_at' => '2024-10-12 07:09:36',
            ),
            2 => 
            array (
                'id' => 5,
                'organization_id' => 1,
                'job_category_id' => 5,
                'designation_name' => 'Yuli Hayes',
                'slug' => 'yuli-hayes',
                'status' => 1,
                'image' => NULL,
                'created_at' => '2024-10-12 08:06:08',
                'updated_at' => '2024-10-12 08:06:08',
            ),
            3 => 
            array (
                'id' => 6,
                'organization_id' => 1,
                'job_category_id' => 1,
                'designation_name' => 'Georgia Barnett',
                'slug' => 'georgia-barnett',
                'status' => 0,
                'image' => NULL,
                'created_at' => '2024-10-12 08:52:12',
                'updated_at' => '2024-10-12 08:52:12',
            ),
            4 => 
            array (
                'id' => 7,
                'organization_id' => 1,
                'job_category_id' => 1,
                'designation_name' => 'Ronan Gentry',
                'slug' => 'ronan-gentry',
                'status' => 1,
                'image' => NULL,
                'created_at' => '2024-10-12 08:53:00',
                'updated_at' => '2024-10-12 08:53:00',
            ),
            5 => 
            array (
                'id' => 8,
                'organization_id' => 1,
                'job_category_id' => 3,
                'designation_name' => 'Jackson Middleton',
                'slug' => 'jackson-middleton',
                'status' => 1,
                'image' => NULL,
                'created_at' => '2024-10-12 09:05:01',
                'updated_at' => '2024-10-12 09:05:01',
            ),
        ));
        
        
    }
}