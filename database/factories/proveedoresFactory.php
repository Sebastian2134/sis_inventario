<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\proveedores;
use Faker\Generator as Faker;

$factory->define(proveedores::class, function (Faker $faker) {

    return [
        'rut' => $faker->word,
        'nombre' => $faker->word,
        'direccion' => $faker->word,
        'telefono' => $faker->word,
        'correo' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
