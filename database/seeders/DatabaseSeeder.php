<?php

namespace Database\Seeders;

use App\Models\Annonce;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Ville;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);

        Ville::create(['nom' => 'Boulogne-sur-Mer', 'code_postal' => '62200']);
        Ville::create(['nom' => 'Saint-Martin-Boulogne', 'code_postal' => '62280']);
        Ville::create(['nom' => 'Outreau', 'code_postal' => '62230']);
        Ville::create(['nom' => 'Le Portel', 'code_postal' => '62480']);


        Annonce::create([
                    'titre' => 'Appartement T2',
                    'description' => 'Appartement T2 de 50 m²',
                    'prix' => 500,
                    'ville_id' => 1,
                ]);

        Annonce::create([
                    'titre' => 'Maison 3 chambres',
                    'description' => 'Maison 3 chambres de 100 m²',
                    'prix' => 1000,
                    'ville_id' => 2,
                ]);

        Annonce::create([
                    'titre' => 'Studio',
                    'description' => 'Studio de 30 m²',
                    'prix' => 400,
                    'ville_id' => 3,
                ]);

        Annonce::create([
                    'titre' => 'Appartement T3',
                    'description' => 'Appartement T3 de 70 m²',
                    'prix' => 700,
                    'ville_id' => 4,
                ]);

    }
}
