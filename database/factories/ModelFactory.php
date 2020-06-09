<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Simplonien;
use App\Statut;
use App\Evenement;
use App\Actualite;
use App\Projet;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Simplonien::class, function (Faker $faker) {
    return [
        'telephone' => $faker->unique()->e164PhoneNumber,
        'nom' => $faker->lastname,
        'prenom' => $faker->firstname,
        'genre' => $faker->randomElements(["masculin", "feminin"])[0],
        'portrait' => $faker->imageUrl,
        'email' => $faker->unique()->safeEmail,
        'fonction' => $faker->jobTitle,
        'entreprise' => $faker->company,
        'promotion' => $faker->year,
        'idStatut' => $faker->numberBetween(1, 2),        
        
    ];
});

$factory->define(Evenement::class, function (Faker $faker) {
    return [
        'titreEvenement' => $faker->sentence,
        'descriptionEvenement' => $faker->text($maxNbChars = 200),
        'dateDebut' => $faker->dateTimeThisYear,
        'dateFin' => $faker->dateTimeThisYear,
        'lieu' => $faker->city,
        'organisateur' => $faker->name,
        'affiche' => $faker->imageUrl,

    ];
});

$factory->define(Actualite::class, function (Faker $faker) {
    return [
        'titreActualite' => $faker->sentence,        
        'date' => $faker->dateTimeThisYear,
        'contenu' => $faker->text($maxNbChars = 200),
        'image' => $faker->imageUrl,
    ];
});

$factory->define(Projet::class, function (Faker $faker) {
    return [
        'titreProjet' => $faker->sentence,
        'descriptionProjet' => $faker->text($maxNbChars = 200),
        'lienProjet' => $faker->Url,

    ];
});