<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\artikel;
use Faker\Generator as Faker;

$factory->define(artikel::class, function (Faker $faker) {
    $title = $faker->sentence;
    return [
        'judul' => $title,
        'isi' => "<h1>".$title."</h1><br><p>".$faker->paragraph(6)."</p><p>".$faker->paragraph(6)."<p>".$faker->paragraph(5)."</p><p>".$faker->paragraph(5)."</p>",
        'users_id' => App\User::all()->random()->id,
        'kategori_artikel_id' => App\kategori_artikel::all()->random()->id,
    ];
});
