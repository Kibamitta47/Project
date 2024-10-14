<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Computer;
use Faker\Factory as Faker;

class ComputerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 50; $i++) {
            Computer::create([
                'name' => $faker->word() . ' Computer',
                'brand' => $faker->company(),
                'specifications' => $faker->randomElement([
                    '8GB RAM, 256GB SSD',
                    '16GB RAM, 512GB SSD',
                    '32GB RAM, 1TB SSD',
                    '4GB RAM, 128GB SSD',
                ]),
                'price' => $faker->numberBetween(20000, 50000),
            ]);
        }
    }
}
