<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Resep;
use App\Models\User;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'name' => 'Yanuar Bima',
            'email' => 'bima.aji1380@gmail.com',
            'password' => bcrypt('123123123')
        ]);

        Resep::create([
            'judul' => 'Resep Pertama',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur quas non nihil aperiam. Id quis voluptas culpa nam sit pariatur.',
            'bahan' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur quas non nihil aperiam. Id quis voluptas culpa nam sit pariatur.' ,
            'langkah' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur quas non nihil aperiam. Id quis voluptas culpa nam sit pariatur.' ,
        ]);
        Resep::create([
            'judul' => 'Resep Kedua',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur quas non nihil aperiam. Id quis voluptas culpa nam sit pariatur.',
            'bahan' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur quas non nihil aperiam. Id quis voluptas culpa nam sit pariatur.' ,
            'langkah' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur quas non nihil aperiam. Id quis voluptas culpa nam sit pariatur.' ,
        ]);
    }
}
