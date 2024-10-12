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
                'category_name' => 'Laukerrrryyyyy',
                'slug' => 'laukerrrryyyyy',
                'status' => 1,
                'image' => 'uploads/job_category/laukerrrryyyyy1728729181670a505d54b94.webp',
                'created_at' => '2024-10-10 19:34:34',
                'updated_at' => '2024-10-12 10:33:01',
            ),
            1 => 
            array (
                'id' => 3,
                'organization_id' => 1,
                'category_name' => 'Laukerry',
                'slug' => 'laukerry',
                'status' => 1,
                'image' => 'uploads/job_category/laukerry172858918167082d7d7dd49.webp',
                'created_at' => '2024-10-10 19:39:41',
                'updated_at' => '2024-10-10 19:39:41',
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
                'category_name' => 'Jillian Kerr',
                'slug' => 'jillian-kerr',
                'status' => 1,
                'image' => 'uploads/job_category/jillian-kerr172859291967083c17eda21.webp',
                'created_at' => '2024-10-10 20:42:00',
                'updated_at' => '2024-10-10 20:42:00',
            ),
        ));
        
        
    }
}