<?php

namespace Database\Factories;

use App\Models\MeterPoints;
use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\Partners;

class MeterPointsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MeterPoints::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'meterpoint' => $this->faker->numberBetween(0, 50),
            'consumption' => $this->faker->numberBetween(0, 50),
            'uplift' => $this->faker->numberBetween(0, 50),
            'created_at' => $this->faker->dateTimeBetween('-1 year', '-10 days'),
            'updated_at' => $this->faker->dateTimeBetween('-9 days', '-1 days'),
        ];
    }
}
