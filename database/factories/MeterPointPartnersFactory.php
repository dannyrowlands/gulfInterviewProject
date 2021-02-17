<?php

namespace Database\Factories;

use App\Models\MeterPointPartners;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Partners;
use App\Models\MeterPoints;

class MeterPointPartnersFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MeterPointPartners::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'partner_id' => Partners::factory()->create(),
            'meter_point_id' => MeterPoints::factory()->create(),
            'created_at' => $this->faker->dateTimeBetween('-1 year', '-10 days'),
            'updated_at' => $this->faker->dateTimeBetween('-9 days', '-1 days'),
        ];
    }
}
