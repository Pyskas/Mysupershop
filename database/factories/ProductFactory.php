<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'price' => $this->faker->numberBetween(100, 1000),
            'quantity' => $this->faker->numberBetween(1, 100),
            'description' => $this->faker->text,
            'categories_id' => Category::factory(),
            'hash' => $this->faker->unique()->word, // Добавьте это
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }    
}

