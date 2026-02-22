<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('types')->delete();
        
        DB::table('types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Front-end',
                'slug' => 'front-end',
                'color' => '#3498db',
                'created_at' => '2026-02-22 00:16:43',
                'updated_at' => '2026-02-22 00:16:43',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Back-end',
                'slug' => 'back-end',
                'color' => '#2ecc71',
                'created_at' => '2026-02-22 00:16:43',
                'updated_at' => '2026-02-22 00:16:43',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Full-stack',
                'slug' => 'full-stack',
                'color' => '#9b59b6',
                'created_at' => '2026-02-22 00:16:43',
                'updated_at' => '2026-02-22 00:16:43',
            ),
        ));
        
        
    }
}