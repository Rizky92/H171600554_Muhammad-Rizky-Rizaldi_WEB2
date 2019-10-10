<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\galeri;
use Faker\Generator as Faker;

$factory->define(galeri::class, function (Faker $faker) {
    return [
        'nama' => $faker->sentence,
        'keterangan' => "<p>".$faker->paragraph."</p><br><p>".$faker->paragraph."<p>".$faker->paragraph."</p>",
        'users_id' => App\User::all()->random()->id,
        'kategori_galeri_id' => App\kategori_galeri::all()->random()->id,
    ];
});
