<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TechnologiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('technologies')->delete();
        
        DB::table('technologies')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'HTML5',
                'slug' => 'html5',
                'color' => '#e34f26',
                'description' => 'Linguaggio di markup per la struttura delle pagine web.',
                'img_url' => 'technologies/images/2G3bgC1IK9r8s38y09iRHfLWHUew2I9p272yGqq3.png',
                'created_at' => '2026-02-22 00:16:43',
                'updated_at' => '2026-02-22 00:38:29',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'CSS3',
                'slug' => 'css3',
                'color' => '#1572b6',
                'description' => 'Linguaggio usato per definire la formattazione di documenti HTML.',
                'img_url' => 'technologies/images/rvuvXB0TT6R0jXqIz5VcHaQJmm7nucjTz4xinq8N.png',
                'created_at' => '2026-02-22 00:16:43',
                'updated_at' => '2026-02-22 00:38:36',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'JavaScript',
                'slug' => 'javascript',
                'color' => '#f7df1e',
                'description' => 'Linguaggio di scripting per l\'interattività.',
                'img_url' => 'technologies/images/iNstT4oR3UW3OmrDsuEd6u396JIMqfgDtCykEM9c.png',
                'created_at' => '2026-02-22 00:16:43',
                'updated_at' => '2026-02-22 00:38:44',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'PHP',
                'slug' => 'php',
                'color' => '#777bb4',
                'description' => 'Linguaggio di scripting lato server ampiamente utilizzato.',
                'img_url' => 'technologies/images/Vq8SenHiz45JoFYSjEPVx2iSP21z4b9VwvV5KXhj.png',
                'created_at' => '2026-02-22 00:16:43',
                'updated_at' => '2026-02-22 00:38:51',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Laravel',
                'slug' => 'laravel',
                'color' => '#ff2d20',
                'description' => 'Framework PHP per applicazioni web eleganti.',
                'img_url' => 'technologies/images/GpYK2jW6H0VIVR9SUwXCqEGmin4wJ9WvFzhgT9Kl.png',
                'created_at' => '2026-02-22 00:16:43',
                'updated_at' => '2026-02-22 00:38:58',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'React',
                'slug' => 'react',
                'color' => '#61dafb',
                'description' => 'Libreria JavaScript per la creazione di interfacce utente.',
                'img_url' => 'technologies/images/FZbU2rKmrzYrTNndRh7500IdtJXsa9psjUUC7PL6.png',
                'created_at' => '2026-02-22 00:16:43',
                'updated_at' => '2026-02-22 00:39:05',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Express',
                'slug' => 'express',
                'color' => '#000000',
                'description' => 'Framework web minimale e flessibile per Node.js.',
                'img_url' => 'technologies/images/sjY2WtinYEoTpFeeqwc5aqeBe3Gj70WQ2mO927WU.webp',
                'created_at' => '2026-02-22 00:16:43',
                'updated_at' => '2026-02-22 00:39:12',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Bootstrap',
                'slug' => 'bootstrap',
                'color' => '#7952b3',
                'description' => 'Il framework CSS più popolare al mondo.',
                'img_url' => 'technologies/images/ix7QUyZX7UUIcyHZZmtjwq8pzmw5o1xvtVvgw9m0.png',
                'created_at' => '2026-02-22 00:16:43',
                'updated_at' => '2026-02-22 00:39:20',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'MySQL',
                'slug' => 'mysql',
                'color' => '#4479a1',
                'description' => 'Sistema di gestione di database relazionali.',
                'img_url' => 'technologies/images/mH4Q2GMqYVfxm859MRd5x3WeXa516ghyQqJRwBjM.webp',
                'created_at' => '2026-02-22 00:16:43',
                'updated_at' => '2026-02-22 00:39:26',
            ),
        ));
        
        
    }
}