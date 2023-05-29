<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Mobil;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


       DB::table('mobils')->insert([
            'Judul' => 'Mobil 1',
            'Gambar' => 'img/services-1.jpg',
            'Deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
        ]);
       DB::table('mobils')->insert([
            'Judul' => 'Mobil 2',
            'Gambar' => 'img/services-1.jpg',
            'Deskripsi' => 'harum nulla nobis quo! Sunt nesciunt consectetur harum velit voluptatem iste nulla amet magnam, officiis,',
        ]);
       DB::table('mobils')->insert([
            'Judul' => 'Mobil 3',
            'Gambar' => 'img/services-1.jpg',
            'Deskripsi' => 'facilis eum ipsam architecto accusamus cupiditate nobis quia corporis voluptatem praesentium!',
        ]);
    //    DB::table('mobils')->insert([
    //         'Judul' => 'Mobil 4 ',
    //         'Gambar' => 'img/services-1.jpg',
    //         'Deskripsi' => 'Sunt nesciunt consectetur harum velit voluptatem iste nulla amet magnam',
    //     ]);

     
    }
}
