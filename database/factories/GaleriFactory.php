<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\galeri;
use Faker\Generator as Faker;

$factory->define(galeri::class, function (Faker $faker) {
    return [
        'nama' => $faker->sentence,
        'keterangan' => $faker->text,
        'users_id' => App\User::all()->random()->id,
        'kategori_galeri_id' => App\kategori_galeri::all()->random()->id,
    ];
});
