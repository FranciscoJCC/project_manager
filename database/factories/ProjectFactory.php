<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'city_id'       => random_int(1,10),
            'company_id'    => random_int(1,10),
            'user_id'       => random_int(1,10),
            'budget'        => random_int(10000,100000),
            'name'          => $this->faker->name(),
            'execution_date'=> now(),
        ];
    }
}
