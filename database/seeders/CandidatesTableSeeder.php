<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CandidatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('candidates')->delete();
        
        
        
    }
}