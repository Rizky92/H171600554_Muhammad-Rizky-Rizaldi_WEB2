<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\artikel;
use Faker\Generator as Faker;

$factory->define(artikel::class, function (Faker $faker) {
    return [
        'judul' => $faker->sentence,
        'isi' => "<h1>".$faker->sentence."</h1><br><p>".$faker->text."</p><br><p>".$faker->text."<p>".$faker->text."</p><br><p>".$faker->text."</p>",
        'users_id' => App\User::all()->random()->id,
        'kategori_artikel_id' => App\kategori_artikel::all()->random()->id,
    ];
});
