<?php

namespace Database\Factories;

use App\Models\PortfolioCategory;
use App\Models\PostCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Portfolio>
 */
class PortfolioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'portfolioCategory_id'=>PortfolioCategory::factory(),
            'name'=>$this->faker->word,
            'description'=>$this->faker->sentence,
            'image'=>$this->faker->imageUrl($width = 640, $height = 480)
        ];
    }
}
