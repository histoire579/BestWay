<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\Compte::class, function (Faker $faker) {
    return [
        'numero'=>$faker->title,
        'nom'=>$faker->title,
        'datenais'=>$faker->date(),
        'telephone'=>$faker->phoneNumber,
        'sexe'=>$faker->title,
        'localisation'=>$faker->sentence(1,true),
        'profession'=>$faker->sentence(1,true),
        'login'=>$faker->title,
        'password'=>$faker->password(),
        'etat'=>$faker->title,
        'idtype'=>function()
        {
          return App\Models\TypeCompte::all()->random();
        }
    ];
});
