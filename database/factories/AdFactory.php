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
        // get random publisher
        $publisher = User::inRandomOrder()->first();

        return [
            "user_id" => $publisher->id,
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
            "fuel" => $this->faker->randomElement(["g", "d", "e", "h", "b"]),
            "transmission" => $this->faker->randomElement(["m", "a"]),
            "year" => $this->faker->numberBetween(1990, 2019),
            "displacement" => $this->faker->randomFloat(1, 1, 3),
            "horses" => $this->faker->numberBetween(75, 200),
            "mileage" => $this->faker->numberBetween(10000, 300000),
            "desc" => $this->faker->text(),
        ];
    }
}
