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
                'title' => 'Web Developer',
                'slug' => 'web-developer',
                'organization_id' => 1,
                'category_id' => 3,
                'location' => 'Dhaka, Bangladesh',
                'vacancy' => '07',
                'experience' => '2-3 Years',
                'gender' => 'Both',
                'salary_from' => '20.00',
                'salary_to' => '50.00',
                'deadline' => '2024-10-30',
                'type' => 'Full Time',
                'status' => 'Open',
            'description' => '<p>Job Description: A UI/UX (User Interface/User Experience) designer is responsible for designing and creating engaging and effective interfaces for software and web applications. This includes designing the layout, visual design, and interactivity of the user interface.</p><p>Job Responsibility: Collaborating with cross-functional teams: UI/UX designers often work closely with other teams, including product management, engineering, and marketing, to ensure that the user interface is aligned with business and technical requirements. You will need to be able to effectively communicate your design ideas and gather feedback from other team members.</p><p>Conducting user research and testing to understand user needs and behaviors.</p><p>Designing wireframes, prototypes, and high-fidelity mockups.</p><p>Developing and maintaining design systems and style guides.</p><p>Collaborating with cross-functional teams, including product management, engineering, and marketing.</p><p>Staying up-to-date with the latest design trends and technologies.</p><p>Gathering and analyzing user requirements to inform the design of new software or web applications.</p><p>Educational Requirements:</p><p>Bachelor degree to complete any reputational university.</p><p>Bachelor degree to complete any reputational university.</p><p>Experiences:</p><p>2-3 Years in this field.</p>',
                'created_at' => '2024-10-15 07:10:57',
                'updated_at' => '2024-10-15 07:11:56',
            ),
        ));
        
        
    }
}