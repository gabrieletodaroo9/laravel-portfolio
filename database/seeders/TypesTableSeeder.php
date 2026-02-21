<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            [
                'name' => 'Front-end',
                'color' => '#3498db',
            ],
            [
                'name' => 'Back-end',
                'color' => '#2ecc71',
            ],
            [
                'name' => 'Full-stack',
                'color' => '#9b59b6',
            ]
        ];

        foreach ($types as $type) {
            
            $newType = new Type();

            $newType->name = $type['name'];
            $newType->slug = Str::slug($type['name']);
            $newType->color = $type['color'];

            $newType->save();
        }
    }
}
