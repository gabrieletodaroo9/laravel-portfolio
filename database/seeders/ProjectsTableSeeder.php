<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('projects')->delete();
        
        DB::table('projects')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'E-commerce Laravel',
                'description' => 'Un intero negozio online con gestione carrello e pagamenti Stripe.',
                'link_github' => 'https://github.com/tuo-utente/ecommerce-laravel',
                'created_at' => '2026-02-22 00:16:43',
                'updated_at' => '2026-02-22 00:16:43',
                'type_id' => 1,
                'slug' => 'e-commerce-laravel',
                'img_url' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Portfolio Personale',
                'description' => 'Il mio sito vetrina costruito con Blade e Tailwind CSS.',
                'link_github' => 'https://github.com/tuo-utente/portfolio-web',
                'created_at' => '2026-02-22 00:16:43',
                'updated_at' => '2026-02-22 00:16:43',
                'type_id' => 1,
                'slug' => 'portfolio-personale',
                'img_url' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Task Management App',
                'description' => 'Un applicativo per gestire i task quotidiani con autenticazione utenti.',
                'link_github' => 'https://github.com/tuo-utente/task-app',
                'created_at' => '2026-02-22 00:16:43',
                'updated_at' => '2026-02-22 00:16:43',
                'type_id' => 1,
                'slug' => 'task-management-app',
                'img_url' => NULL,
            ),
        ));
        
        
    }
}