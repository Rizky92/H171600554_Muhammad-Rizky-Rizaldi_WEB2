<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\artikel;
use Faker\Generator as Faker;

$factory->define(artikel::class, function (Faker $faker) {
    return [
        'judul' => $faker->sentence,
        'isi' => $faker->text,
        'users_id' => App\User::all()->random()->id,
        'kategori_artikel_id' => App\kategori_artikel::all()->random()->id,
    ];
});
