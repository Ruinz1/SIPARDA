<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ekraf;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(1)->create();

        \App\Models\CategorySubEkraf::create([
            'nama' => 'Kriya',
            'slug' => 'kriya',
            'image' => '1'
        ]);
         \App\Models\CategorySubEkraf::create([
            'nama' => 'Seni Pertunjukan',
            'slug' => 'seni-pertunjukan',
            'image' => '2'
        ]);
        \App\Models\CategorySubEkraf::create([
            'nama' => 'Desain Produk',
            'slug' => 'desain-produk',
            'image' => '3'
        ]);
        \App\Models\CategorySubEkraf::create([
            'nama' => 'Seni Rupa',
            'slug' => 'seni-rupa',
            'image' => '4'
        ]);
        \App\Models\CategorySubEkraf::create([
            'nama' => 'Kuliner',
            'slug' => 'kuliner',
            'image' => '5'
        ]);
       \App\Models\CategorySubEkraf::create([
            'nama' => 'Fotografi',
            'slug' => 'fotografi',
            'image' => '6'
        ]);
       \App\Models\CategorySubEkraf::create([
            'nama' => 'Musik',
            'slug' => 'musik',
            'status' => '7'
        ]);
        \App\Models\CategorySubEkraf::create([
            'nama' => 'Arsitektur',
            'slug' => 'arsitektur',
            'image' => '8'
        ]);
        \App\Models\CategorySubEkraf::create([
            'nama' => 'Desain Interior',
            'slug' => 'desain-interior',
            'image' => '9'
        ]);
        \App\Models\CategorySubEkraf::create([
            'nama' => 'Fashion',
            'slug' => 'fashion',
            'image' => '10'
        ]);
        \App\Models\CategorySubEkraf::create([
            'nama' => 'Animasi & Film',
            'slug' => 'animasi-&-film',
            'image' => '11'
        ]);
        \App\Models\CategorySubEkraf::create([
            'nama' => 'Desain Komunikasi',
            'slug' => 'desain-komunikasi',
            'status' => '12'
        ]);
        \App\Models\CategorySubEkraf::create([
            'nama' => 'Televisi & Radio',
            'slug' => 'televisi-&-radio',
            'image' => '13'
        ]);
        \App\Models\CategorySubEkraf::create([
            'nama' => 'Periklanan',
            'slug' => 'Periklanan',
            'image' => '14'
        ]);
        \App\Models\CategorySubEkraf::create([
            'nama' => 'Penerbitan',
            'slug' => 'penerbitan',
           'image' => '15'
        ]);
        \App\Models\CategorySubEkraf::create([
            'nama' => 'Aplikasi',
            'slug' => 'aplikasi',
            'image' => '16'
        ]);
        \App\Models\CategorySubEkraf::create([
            'nama' => 'Pengembangan Game',
            'slug' => 'pengembangan-game',
            'image' => '17'
        ]);

    }
}
