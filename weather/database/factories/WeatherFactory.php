<?php

namespace Database\Factories;

use App\Models\weather;
use Illuminate\Database\Eloquent\Factories\Factory;

class WeatherFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = weather::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'sensor_id' => $this->faker->randomDigitNotNull,
            'temperature' => $this->faker->randomFloat(),
            'humidity' => $this->faker->randomFloat()
        ];
    }
}
