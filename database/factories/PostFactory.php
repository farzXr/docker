<?php

namespace Database\Factories;

use App\Models\Catigory;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Post::class;
    public function definition(): array
    {
        return [
            'title'=>$this->faker->sentence(2),
            'content'=>$this->faker->sentence(5),
            'catigory_id'=>Catigory::get()->random()->id,
        ];
    }
}
