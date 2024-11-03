<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    protected $model = Category::class;

        
    public function definition()
    {
        return [
            'title' => $this->faker->word,
            'icon' => $this->faker->word,
            'top' => $this->faker->optional()->randomNumber(),
            'sort' => $this->faker->numberBetween(1, 10),
            'status' => $this->faker->boolean,
            'hash' => $this->faker->unique()->uuid(), // Используйте uuid для уникальности
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }    
}

