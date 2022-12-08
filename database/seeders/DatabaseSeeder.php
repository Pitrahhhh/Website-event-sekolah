<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Category;
use \App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       

        User::create([
            'name' => 'Pitrah',
            'username' => 'MOB',
            'email' => 'pipit@gmail.com',
            'password' => bcrypt('password'),
        ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Sudah Berjalan',
            'slug' => 'sudah-berjalan',          
        ]);

        Category::create([
            'name' => 'Belum Berjalan',
            'slug' => 'belum-berjalan',          
        ]);

        // Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal',          
        // ]);

        Post::factory(0)->create();

    }
}
