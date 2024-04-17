<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Country;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // $categories = Category::pluck('category_id');
         return[
            'user_id' => 1,
            'category_id' => Category::inRandomOrder()->first()->id,
            'country_id' => Country::inRandomOrder()->first()->id,
            'title' => $slug = $this->faker->sentence,
            'slug' => Str::slug($slug),
            'content' => $this->faker->paragraph,
            'image' => $this->faker->imageUrl,
            'status' => true,
        ];
    }
}