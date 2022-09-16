<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence(mt_rand(3, 10));
        $slug = Str::slug($title);
        $content = collect($this->faker->paragraphs(mt_rand(5, 10)))->map(fn ($paragraph) => "<p class='text-white'>{$paragraph}</p>")->implode("\n");
        return [
            'title' => $title,
            'slug' => $slug,
            'excerpt' => $this->faker->text(mt_rand(250, 300)),
            'content' => $content,
            'published_at' => $this->faker->dateTimeBetween('-1 year', '+1 year'),
            'category_id' => mt_rand(1, Category::count()),
            'user_id' => mt_rand(1, User::count()),
        ];
    }
}
