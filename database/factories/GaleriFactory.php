<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\galeri;
use Faker\Generator as Faker;

$factory->define(galeri::class, function (Faker $faker) {
    return [
        'nama' => $faker->sentence,
        'keterangan' => "<p>".$faker->paragraph(5)."</p><p>".$faker->paragraph(2)."<p>".$faker->paragraph(3)."</p>",
        'path' => "/storage/galeri/".$faker->image('public/storage/galeri', 640, 480, null, false),
        'users_id' => App\User::all()->random()->id,
        'kategori_galeri_id' => App\kategori_galeri::all()->random()->id,
    ];
});
