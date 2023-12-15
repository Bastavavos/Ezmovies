<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('movies')->insert([
            'title' => 'Forrest Gump',
            'director' => 'Robert Zemeckis',
            'type' => 'Comédie dramatique',
            'date' => '1994',
        ]);

        DB::table('movies')->insert([
            'title' => 'La Ligne Verte',
            'director' => 'Frank Darabont',
            'type' => 'Drame, Fantastique',
            'date' => '1999',
        ]);

        DB::table('movies')->insert([
            'title' => 'La Liste de Schindler',
            'director' => 'Steven Spielberg',
            'type' => 'Drame, Histoire',
            'date' => '1993',
        ]);

        DB::table('movies')->insert([
            'title' => '12 Hommes en Colère',
            'director' => 'Sidney Lumet',
            'type' => 'Drame',
            'date' => '1957',
        ]);

        DB::table('movies')->insert([
            'title' => 'Le Parrain',
            'director' => 'Francis Ford Coppola',
            'type' => 'Crime, Drame',
            'date' => '1972',
        ]);

        DB::table('movies')->insert([
            'title' => 'Les Évadés',
            'director' => 'Frank Darabont',
            'type' => 'Drame',
            'date' => '1994',
        ]);
    }
}
