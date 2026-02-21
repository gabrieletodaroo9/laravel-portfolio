<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TechnologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies = [
            [
                'name' => 'HTML5',
                'color' => '#E34F26',
                'description' => 'Linguaggio di markup per la struttura delle pagine web.',
                'img_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/HTML5_logo_and_wordmark.svg/1280px-HTML5_logo_and_wordmark.svg.png',
            ],
            [
                'name' => 'CSS3',
                'color' => '#1572B6',
                'description' => 'Linguaggio usato per definire la formattazione di documenti HTML.',
                'img_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d5/CSS3_logo_and_wordmark.svg/500px-CSS3_logo_and_wordmark.svg.png',
            ],
            [
                'name' => 'JavaScript',
                'color' => '#F7DF1E',
                'description' => 'Linguaggio di scripting per l\'interattività.',
                'img_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Unofficial_JavaScript_logo_2.svg/960px-Unofficial_JavaScript_logo_2.svg.png',
            ],
            [
                'name' => 'PHP',
                'color' => '#777BB4',
                'description' => 'Linguaggio di scripting lato server ampiamente utilizzato.',
                'img_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/3840px-PHP-logo.svg.png',
            ],
            [
                'name' => 'Laravel',
                'color' => '#FF2D20',
                'description' => 'Framework PHP per applicazioni web eleganti.',
                'img_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/3840px-Laravel.svg.png',
            ],
            [
                'name' => 'React',
                'color' => '#61DAFB',
                'description' => 'Libreria JavaScript per la creazione di interfacce utente.',
                'img_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a7/React-icon.svg/3840px-React-icon.svg.png',
            ],
            [
                'name' => 'Express',
                'color' => '#000000',
                'description' => 'Framework web minimale e flessibile per Node.js.',
                'img_url' => 'https://uxwing.com/wp-content/themes/uxwing/download/brands-and-social-media/express-js-icon.png',
            ],
            [
                'name' => 'Bootstrap',
                'color' => '#7952B3',
                'description' => 'Il framework CSS più popolare al mondo.',
                'img_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Bootstrap_logo.svg/1280px-Bootstrap_logo.svg.png',
            ],
            [
                'name' => 'MySQL',
                'color' => '#4479A1',
                'description' => 'Sistema di gestione di database relazionali.',
                'img_url' => 'https://images.icon-icons.com/1381/PNG/512/mysqlworkbench_93532.png',
            ],
        ];

        foreach ($technologies as $tech) {
            $newTech = new Technology();
            
            $newTech->name = $tech['name'];
            $newTech->slug = Str::slug($tech['name']);
            $newTech->color = $tech['color'];
            $newTech->description = $tech['description'];
            $newTech->img_url = $tech['img_url'];

            $newTech->save();
        }
    }
}
