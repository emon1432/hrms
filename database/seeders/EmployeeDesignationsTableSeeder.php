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
                'job_category_id' => 7,
                'designation_name' => 'Teacher',
                'slug' => 'teacher',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'image' => NULL,
                'created_at' => '2024-10-12 07:02:28',
                'updated_at' => '2024-10-13 18:08:56',
            ),
            1 => 
            array (
                'id' => 4,
                'organization_id' => 1,
                'job_category_id' => 1,
                'designation_name' => 'Web Designer',
                'slug' => 'web-designer',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'image' => NULL,
                'created_at' => '2024-10-12 07:09:36',
                'updated_at' => '2024-10-13 18:06:09',
            ),
            2 => 
            array (
                'id' => 5,
                'organization_id' => 1,
                'job_category_id' => 1,
                'designation_name' => 'Front End Designer',
                'slug' => 'front-end-designer',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'image' => NULL,
                'created_at' => '2024-10-12 08:06:08',
                'updated_at' => '2024-10-13 18:10:40',
            ),
            3 => 
            array (
                'id' => 6,
                'organization_id' => 1,
                'job_category_id' => 1,
                'designation_name' => 'Georgia Barnett',
                'slug' => 'georgia-barnett',
                'status' => 0,
                'created_by' => 1,
                'updated_by' => NULL,
                'image' => NULL,
                'created_at' => '2024-10-12 08:52:12',
                'updated_at' => '2024-10-12 08:52:12',
            ),
            4 => 
            array (
                'id' => 7,
                'organization_id' => 1,
                'job_category_id' => 5,
                'designation_name' => 'SEO Analyst',
                'slug' => 'seo-analyst',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'image' => NULL,
                'created_at' => '2024-10-12 08:53:00',
                'updated_at' => '2024-10-13 18:09:49',
            ),
            5 => 
            array (
                'id' => 8,
                'organization_id' => 1,
                'job_category_id' => 3,
                'designation_name' => 'Android Developer',
                'slug' => 'android-developer',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'image' => NULL,
                'created_at' => '2024-10-12 09:05:01',
                'updated_at' => '2024-10-13 18:07:50',
            ),
            6 => 
            array (
                'id' => 9,
                'organization_id' => 1,
                'job_category_id' => 3,
                'designation_name' => 'Web Developer',
                'slug' => 'web-developer',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'image' => NULL,
                'created_at' => '2024-10-13 15:15:37',
                'updated_at' => '2024-10-13 18:05:40',
            ),
        ));
        
        
    }
}