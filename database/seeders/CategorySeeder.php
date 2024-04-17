<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Entertainment',
            'Business',
            'Political journalism',
            'Crime',
            'Politics',
            'Sports',
            'Lifestyle news',
            'Weather',
            'Breaking news',
            'Media monitoring service',
            'Local news',
            'Global news flow',
            'Online newsroom',
            'Social media newsroom',
            'World news',
            'Broadcast journalism',
            'Features',
            'Health',
            'Cars',
            'Law',
            'Tech news',
            'Cultural events',
            'Travel',
            'Fashion',
            'Other',

        ];

        foreach($categories as $category) {
            Category::create([
                'name' => $category,
                'slug' => Str::slug($category),
            ]);
        }
    }
}