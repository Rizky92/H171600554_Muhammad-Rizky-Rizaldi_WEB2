<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\berita;
use Faker\Generator as Faker;

$factory->define(berita::class, function (Faker $faker) {
    return [
        'judul' => $faker->sentence,
        'isi' => $faker->text,
        'users_id' => App\User::all()->random()->id,
        'kategori_berita_id' => App\kategori_berita::all()->random()->id,
    ];
});
