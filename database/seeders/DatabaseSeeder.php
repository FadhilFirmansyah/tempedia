<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Mitra;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        User::create([
            "name" => "Tempedia",
            "username" => "tempe",
            "email" => "tempe@gmail.com",
            "password" => bcrypt("enaktempe")
        ]);

        User::factory(5)->create();
        Category::create([
            "name" => "Jenis-jenis",
            "slug" => "jenis-jenis"
        ]);
        Category::create([
            "name" => "Resep",
            "slug" => "resep"
        ]);
        Category::create([
            "name" => "Fakta",
            "slug" => "faktaa"
        ]);
        Blog::factory(20)->create();
        Mitra::factory(5)->create();
    }
}
