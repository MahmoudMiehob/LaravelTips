<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name" => $this->faker->name,
            "email" => $this->faker->email,
            "phone" => $this->faker->phoneNumber(),
            "salary" => $this->faker->numberBetween(3000,50000),
            "department" => $this->faker->randomElement(array('Acc','mark','sales'))
        ];
    }
}
