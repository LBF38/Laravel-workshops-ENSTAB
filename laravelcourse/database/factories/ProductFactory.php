<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

class ProductFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => $this->faker->company(),
            'price' => $this->faker->numberBetween($min = 200, $max = 9000),
        ];
    }
}
