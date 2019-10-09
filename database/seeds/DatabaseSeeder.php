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
        factory(App\User::class, 250)->create();

        factory(App\kategori_artikel::class, 100)->create();
        factory(App\kategori_berita::class, 100)->create();
        factory(App\kategori_galeri::class, 100)->create();
        factory(App\kategori_pengumuman::class, 100)->create();

        factory(App\artikel::class, 1000)->create();
        factory(App\berita::class, 1000)->create();
        factory(App\galeri::class, 10)->create();
        factory(App\pengumuman::class, 1000)->create();
    }
}
