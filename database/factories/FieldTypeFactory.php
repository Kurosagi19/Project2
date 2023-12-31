<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FieldType>
 */
class FieldTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // Định nghĩa các trường sẽ được fake như nào
            'type' => $this->faker->name,
            'price' => $this->faker->randomNumber(),
        ];
    }
}
