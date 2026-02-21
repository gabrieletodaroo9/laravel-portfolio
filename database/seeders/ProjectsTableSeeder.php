<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $projects = [
            [
                'title' => 'E-commerce Laravel',
                'description' => 'Un intero negozio online con gestione carrello e pagamenti Stripe.',
                'link_github' => 'https://github.com/tuo-utente/ecommerce-laravel',
            ],
            [
                'title' => 'Portfolio Personale',
                'description' => 'Il mio sito vetrina costruito con Blade e Tailwind CSS.',
                'link_github' => 'https://github.com/tuo-utente/portfolio-web',
            ],
            [
                'title' => 'Task Management App',
                'description' => 'Un applicativo per gestire i task quotidiani con autenticazione utenti.',
                'link_github' => 'https://github.com/tuo-utente/task-app',
            ],
        ];

        foreach($projects as $project){
            $newproject= new Project();

            $newproject->title = $project["title"];
            $newproject->slug = Str::slug($project['title']);
            $newproject->description = $project["description"];
            $newproject->link_github = $project["link_github"];
            $newproject->img_url = $project["img_url"]??null;

            $newproject->save();
        }

    }
}
