<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\TypeCompte::class, function (Faker $faker) {
    return [
        'libelle'=>$faker->title,
    ];
});
