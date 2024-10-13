<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JobsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('jobs')->delete();
        
        \DB::table('jobs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'organization_id' => 1,
                'job_category_id' => 3,
                'title' => 'Jr Web Developer',
                'location' => 'Dhaka, Bangladesh',
                'vacancy' => '7 Person',
                'experience' => '2-3 Years.',
                'gender' => 'Both.',
                'salary_from' => '30k',
                'salary_to' => '50k',
                'deadline' => '2024-12-20',
                'type' => 'Full Time',
                'status' => 'Open',
            'description' => '<p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; scroll-behavior: smooth; line-height: 28px;"><span style="margin: 0px; padding: 0px; scroll-behavior: smooth;">Job Description:</span>&nbsp;A UI/UX (User Interface/User Experience) designer is responsible for designing and creating engaging and effective interfaces for software and web applications. This includes designing the layout, visual design, and interactivity of the user interface.<br></p>',
                'slug' => 'jr-web-developer',
                'created_by' => 1,
                'updated_by' => 1,
                'view_count' => 0,
                'created_at' => '2024-10-13 15:38:07',
                'updated_at' => '2024-10-13 18:14:51',
            ),
        ));
        
        
    }
}