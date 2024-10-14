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
                'created_by' => 1,
                'updated_by' => 1,
                'image' => 'uploads/job_category/design-jobs1728894134670cd4b604ebe.webp',
                'created_at' => '2024-10-10 19:34:34',
                'updated_at' => '2024-10-14 08:22:15',
            ),
            1 => 
            array (
                'id' => 3,
                'organization_id' => 1,
                'category_name' => 'Development',
                'slug' => 'development',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'image' => 'uploads/job_category/development1728894149670cd4c59cec5.webp',
                'created_at' => '2024-10-10 19:39:41',
                'updated_at' => '2024-10-14 08:22:29',
            ),
            2 => 
            array (
                'id' => 4,
                'organization_id' => 1,
                'category_name' => 'Big Box Gyms',
                'slug' => 'big-box-gyms',
                'status' => 0,
                'created_by' => 1,
                'updated_by' => NULL,
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
                'created_by' => 1,
                'updated_by' => 1,
                'image' => 'uploads/job_category/technology1728894187670cd4eb1be62.webp',
                'created_at' => '2024-10-10 20:42:00',
                'updated_at' => '2024-10-14 08:23:07',
            ),
            4 => 
            array (
                'id' => 6,
                'organization_id' => 1,
                'category_name' => 'Web Applications',
                'slug' => 'web-applications',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'image' => 'uploads/job_category/web-applications1728894197670cd4f5e958c.webp',
                'created_at' => '2024-10-13 18:03:03',
                'updated_at' => '2024-10-14 08:23:17',
            ),
            5 => 
            array (
                'id' => 7,
                'organization_id' => 1,
                'category_name' => 'Education',
                'slug' => 'education',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'image' => 'uploads/job_category/education1728894164670cd4d4ced0b.webp',
                'created_at' => '2024-10-13 18:03:42',
                'updated_at' => '2024-10-14 08:22:44',
            ),
            6 => 
            array (
                'id' => 8,
                'organization_id' => 1,
                'category_name' => 'Medical & Nurse',
                'slug' => 'medical-nurse',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'image' => 'uploads/job_category/medical-nurse1728894176670cd4e0571af.webp',
                'created_at' => '2024-10-13 18:04:25',
                'updated_at' => '2024-10-14 08:22:56',
            ),
        ));
        
        
    }
}