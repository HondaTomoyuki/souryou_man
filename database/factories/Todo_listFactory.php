<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class Todo_listFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'list' => $this->faker->text,
        ];
    }
}
