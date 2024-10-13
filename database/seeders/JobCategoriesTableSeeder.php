<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JobCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('job_categories')->delete();
        
        \DB::table('job_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'organization_id' => 1,
                'category_name' => 'Design Jobs',
                'slug' => 'design-jobs',
                'status' => 1,
                'image' => 'uploads/job_category/design-jobs1728842552670c0b3875a36.webp',
                'created_at' => '2024-10-10 19:34:34',
                'updated_at' => '2024-10-13 18:02:32',
            ),
            1 => 
            array (
                'id' => 3,
                'organization_id' => 1,
                'category_name' => 'Development',
                'slug' => 'development',
                'status' => 1,
                'image' => 'uploads/job_category/development1728842495670c0affe0543.webp',
                'created_at' => '2024-10-10 19:39:41',
                'updated_at' => '2024-10-13 18:01:35',
            ),
            2 => 
            array (
                'id' => 4,
                'organization_id' => 1,
                'category_name' => 'Big Box Gyms',
                'slug' => 'big-box-gyms',
                'status' => 0,
                'image' => 'uploads/job_category/big-box-gyms17285921976708394535f8c.webp',
                'created_at' => '2024-10-10 20:29:57',
                'updated_at' => '2024-10-10 20:29:57',
            ),
            3 => 
            array (
                'id' => 5,
                'organization_id' => 1,
                'category_name' => 'Technology',
                'slug' => 'technology',
                'status' => 1,
                'image' => 'uploads/job_category/technology1728842457670c0ad9749db.webp',
                'created_at' => '2024-10-10 20:42:00',
                'updated_at' => '2024-10-13 18:00:57',
            ),
            4 => 
            array (
                'id' => 6,
                'organization_id' => 1,
                'category_name' => 'Web Applications',
                'slug' => 'web-applications',
                'status' => 1,
                'image' => 'uploads/job_category/web-applications1728842583670c0b57108e4.webp',
                'created_at' => '2024-10-13 18:03:03',
                'updated_at' => '2024-10-13 18:03:03',
            ),
            5 => 
            array (
                'id' => 7,
                'organization_id' => 1,
                'category_name' => 'Education',
                'slug' => 'education',
                'status' => 1,
                'image' => 'uploads/job_category/education1728842622670c0b7eac7ae.webp',
                'created_at' => '2024-10-13 18:03:42',
                'updated_at' => '2024-10-13 18:03:42',
            ),
            6 => 
            array (
                'id' => 8,
                'organization_id' => 1,
                'category_name' => 'Medical & Nurse',
                'slug' => 'medical-nurse',
                'status' => 1,
                'image' => 'uploads/job_category/medical-nurse1728842665670c0ba971622.webp',
                'created_at' => '2024-10-13 18:04:25',
                'updated_at' => '2024-10-13 18:04:25',
            ),
        ));
        
        
    }
}