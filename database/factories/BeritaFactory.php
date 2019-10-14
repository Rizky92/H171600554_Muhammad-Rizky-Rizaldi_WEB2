<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\berita;
use Faker\Generator as Faker;

$factory->define(berita::class, function (Faker $faker) {
    $title = $faker->sentence;
    return [
        'judul' => $title,
        'isi' => "<h1>".$title."</h1><br><p>".$faker->paragraph(6)."</p><p>".$faker->paragraph(6)."<p>".$faker->paragraph(5)."</p><p>".$faker->paragraph(5)."</p>",
        'users_id' => App\User::all()->random()->id,
        'kategori_berita_id' => App\kategori_berita::all()->random()->id,
    ];
});
