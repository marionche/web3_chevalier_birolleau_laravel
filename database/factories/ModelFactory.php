<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/*Il crée une factorie : */

$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Post::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence(6, true),
        'content' => $faker->text,
        'user_id' => $faker->numberBetween(1, 20),
    ];
});

$factory->define(App\Models\Comment::class, function (Faker\Generator $faker) {
    return [
        'comment' => $faker->text,
        'user_id' => $faker->numberBetween(1, 20),
        'post_id' => $faker->numberBetween(1, 15),
    ];
});

$factory->define(App\Models\Projet::class, function (Faker\Generator $faker) {
    return [
        'name'=> $faker->sentence(8, true),
        'name_author'=> $faker->sentence(10, true),
        'adress'=> $faker->adresse,
        'telephone'=> $faker->phoneTel,
        'suivi'=> $faker->sentence(12, true),
        'adresse'=> $faker->adress,
        'telephones'=> $faker->phonesTel,
        'fiche'=> $faker->text,
        'type_projet'=> "autre",
        'contexte'=> $faker->text,
        'demande'=> $faker->text,
        'objectifs'=> $faker->text,
        'contraintes' => $faker->text,
    ];
});
