<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DesignationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('designations')->delete();
        
        \DB::table('designations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Web Designer',
                'slug' => 'web-designer',
                'description' => NULL,
                'created_at' => '2024-10-15 06:57:12',
                'updated_at' => '2024-10-15 06:57:12',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Web Developer',
                'slug' => 'web-developer',
                'description' => NULL,
                'created_at' => '2024-10-15 06:57:27',
                'updated_at' => '2024-10-15 06:57:27',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Product Manager',
                'slug' => 'product-manager',
                'description' => NULL,
                'created_at' => '2024-10-15 06:58:32',
                'updated_at' => '2024-10-15 06:58:32',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'SEO Analyst',
                'slug' => 'seo-analyst',
                'description' => NULL,
                'created_at' => '2024-10-15 06:58:42',
                'updated_at' => '2024-10-15 06:58:42',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'UX Designer',
                'slug' => 'ux-designer',
                'description' => NULL,
                'created_at' => '2024-10-15 06:58:56',
                'updated_at' => '2024-10-15 06:58:56',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Android Developer',
                'slug' => 'android-developer',
                'description' => NULL,
                'created_at' => '2024-10-15 06:59:10',
                'updated_at' => '2024-10-15 06:59:10',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'IT Technician',
                'slug' => 'it-technician',
                'description' => NULL,
                'created_at' => '2024-10-15 06:59:18',
                'updated_at' => '2024-10-15 06:59:18',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Front End Designer',
                'slug' => 'front-end-designer',
                'description' => NULL,
                'created_at' => '2024-10-15 06:59:40',
                'updated_at' => '2024-10-15 06:59:40',
            ),
        ));
        
        
    }
}