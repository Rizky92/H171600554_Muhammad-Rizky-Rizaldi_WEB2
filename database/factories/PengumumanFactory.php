<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\pengumuman;
use Faker\Generator as Faker;

$factory->define(pengumuman::class, function (Faker $faker) {
    return [
        'judul' => $faker->sentence,
        'isi' => $faker->text,
        'users_id' => App\User::all()->random()->id,
        'kategori_pengumuman_id' => App\kategori_pengumuman::all()->random()->id,
    ];
});
