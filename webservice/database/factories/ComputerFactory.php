<?php

namespace Database\Factories;

use App\Models\Computer;
use Illuminate\Database\Eloquent\Factories\Factory;

class ComputerFactory extends Factory
{
    protected $model = Computer::class;

    public function definition()
    {
        return [
            'brand' => $this->faker->company,
            'model' => $this->faker->word,
            'processor' => $this->faker->word,
            'ram' => $this->faker->numberBetween(4, 64),
            'storage' => $this->faker->randomElement(['256GB SSD', '512GB SSD', '1TB HDD', '2TB HDD']),
            'graphics_card' => $this->faker->word,
            'is_available' => $this->faker->boolean(80),
        ];
    }
}
