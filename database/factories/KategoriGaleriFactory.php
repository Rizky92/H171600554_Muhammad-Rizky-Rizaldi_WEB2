<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\kategori_galeri;
use Faker\Generator as Faker;

$factory->define(kategori_galeri::class, function (Faker $faker) {
    return [
        'nama' => $faker->word,
        'users_id' => App\User::all()->random()->id,
    ];
});
