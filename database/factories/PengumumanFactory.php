<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\pengumuman;
use Faker\Generator as Faker;

$factory->define(pengumuman::class, function (Faker $faker) {
    return [
        'judul' => $faker->sentence,
        'isi' => "<h1>".$faker->sentence."</h1><br><p>".$faker->text."</p><br><p>".$faker->text."<p>".$faker->text."</p><br><p>".$faker->text."</p>",
        'users_id' => App\User::all()->random()->id,
        'kategori_pengumuman_id' => App\kategori_pengumuman::all()->random()->id,
    ];
});
