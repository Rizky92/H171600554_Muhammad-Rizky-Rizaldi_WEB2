<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\pengumuman;
use Faker\Generator as Faker;

$factory->define(pengumuman::class, function (Faker $faker) {
    $title = $faker->sentence;
    return [
        'judul' => $title,
        'isi' => "<h1>".$title."</h1><br><p>".$faker->paragraph(6)."</p><p>".$faker->paragraph(6)."<p>".$faker->paragraph(5)."</p><p>".$faker->paragraph(5)."</p>",
        'users_id' => App\User::all()->random()->id,
        'kategori_pengumuman_id' => App\kategori_pengumuman::all()->random()->id,
    ];
});
