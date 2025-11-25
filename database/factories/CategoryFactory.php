<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $category=[
        "Technology",
    "Health",
    "Travel",
    "Finance",
    "Education",
    "Food",
    "Lifestyle",
    "Business",
    "Sports",
    "Art"
    ];  
        $category=fake()->unique()->randomElement($category);
        return [
            //
            'name'=>$category,
            'slug'=>str($category)->slug(),

        ];
    }
}
