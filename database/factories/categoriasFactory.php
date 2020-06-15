<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\categorias;
use Faker\Generator as Faker;

$factory->define(categorias::class, function (Faker $faker) {

    return [
        'nombre' => $faker->word,
        'descripcion' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
