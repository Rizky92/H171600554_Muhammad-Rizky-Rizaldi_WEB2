<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 1000)->create();

        factory(App\kategori_artikel::class, 100)->create();
        factory(App\kategori_berita::class, 100)->create();
        factory(App\kategori_galeri::class, 100)->create();
        factory(App\kategori_pengumuman::class, 10)->create();

        factory(App\artikel::class, 10000)->create();
        factory(App\berita::class, 10000)->create();
        factory(App\galeri::class, 5)->create();
        factory(App\pengumuman::class, 10000)->create();
    }
}
