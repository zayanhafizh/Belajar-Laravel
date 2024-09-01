<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3),
            'excerpt' => $this->faker->paragraph(3),
            'user_id' => $this->faker->numberBetween(1,3),
            'category_id' => $this->faker->numberBetween(1,3),
            'body' => $this->faker->paragraphs(3, true), // Mengubah array menjadi string
        ];
    }

}
