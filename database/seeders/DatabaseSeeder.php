<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::truncate();
        Blog::truncate();
        Category::truncate();

        $mgmg = User::factory()->create(['name'=>'mgmg','username'=>'mgmg']);
        $aungaung= User::factory()->create(['name'=>'aungaung','username'=>'aungaung']);
        $outdoor= Category::factory()->create(['name'=>'outdoor']);
        $indoor= Category::factory()->create(['name'=>'indoor']);

        Blog::factory(2)->create(['category_id'=>$indoor->id,'user_id'=>$mgmg->id]);
        Blog::factory(2)->create(['category_id'=>$outdoor->id,'user_id'=>$aungaung->id]);


    }
}
