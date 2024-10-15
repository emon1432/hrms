<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Car Driving',
                'slug' => 'car-driving',
                'image' => 'uploads/category/car-driving1728975687670e1347098be.webp',
                'description' => NULL,
                'created_at' => '2024-10-15 07:01:27',
                'updated_at' => '2024-10-15 07:01:27',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Design Jobs',
                'slug' => 'design-jobs',
                'image' => 'uploads/category/design-jobs1728975709670e135d8457f.webp',
                'description' => NULL,
                'created_at' => '2024-10-15 07:01:49',
                'updated_at' => '2024-10-15 07:01:49',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Development',
                'slug' => 'development',
                'image' => 'uploads/category/development1728975725670e136dc37c4.webp',
                'description' => NULL,
                'created_at' => '2024-10-15 07:02:05',
                'updated_at' => '2024-10-15 07:02:05',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Education',
                'slug' => 'education',
                'image' => 'uploads/category/education1728975743670e137f93c28.webp',
                'description' => NULL,
                'created_at' => '2024-10-15 07:02:23',
                'updated_at' => '2024-10-15 07:02:23',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Medical & Nurse',
                'slug' => 'medical-nurse',
                'image' => 'uploads/category/medical-nurse1728975763670e13933cd31.webp',
                'description' => NULL,
                'created_at' => '2024-10-15 07:02:43',
                'updated_at' => '2024-10-15 07:02:43',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Technology',
                'slug' => 'technology',
                'image' => 'uploads/category/technology1728975783670e13a7ce8d6.webp',
                'description' => NULL,
                'created_at' => '2024-10-15 07:03:03',
                'updated_at' => '2024-10-15 07:03:03',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Transportation',
                'slug' => 'transportation',
                'image' => 'uploads/category/transportation1728975799670e13b74f678.webp',
                'description' => NULL,
                'created_at' => '2024-10-15 07:03:19',
                'updated_at' => '2024-10-15 07:03:19',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Web Applications',
                'slug' => 'web-applications',
                'image' => 'uploads/category/web-applications1728975868670e13fc83dcc.webp',
                'description' => NULL,
                'created_at' => '2024-10-15 07:04:28',
                'updated_at' => '2024-10-15 07:04:28',
            ),
        ));
        
        
    }
}