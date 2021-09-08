<?php

namespace Database\Factories;

use App\Models\Ad;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ad::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "user_id" => User::factory(),
            "condition" => $this->faker->randomElement(["u", "n", "c"]),
            "brand" => "Honda",
            "model" => $this->faker->word(),
            "body_type" => $this->faker->randomElement([
                "hb",
                "li",
                "ca",
                "co",
                "mv",
                "cb",
                "su",
                "pu"
            ]),
            "price" => $this->faker->numberBetween(500, 10000),
            "fuel" => $this->faker->randomElement(["g", "d", "e", "h"]),
            "year" => $this->faker->numberBetween(1990, 2019),
            "horses" => $this->faker->numberBetween(75, 200),
            "milage" => $this->faker->numberBetween(10000, 300000),
            "desc" => $this->faker->text(),
        ];
    }
}
