<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Catigory;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $posts = Post::factory(3)->create();
        //Catigory::factory(3)->create();
        //$tags = Tag::factory(3)->create();
        $tags = Tag::get();
        foreach ($posts as $post){
            $tagIds = $tags->random(3)->pluck('id');
            $post->tags()->attach($tagIds);
        }
    }
}
