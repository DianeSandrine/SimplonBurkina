<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use Faker\ModelFactory;
use App\Simplonien;
use App\Statut;
use App\Evenement;
use App\Actualite;
use App\Projet;

class ModelFactorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('statuts')->insert([
            ['statut' => 'apprenant'],
            ['statut' => 'alumni']
        ]);
        
        factory(App\Evenement::class, 6)->create();  
        factory(App\Actualite::class, 3)->create(); 
        factory(App\Projet::class, 10)->create(); 
        factory(App\Simplonien::class, 30)->create();


    }
}
