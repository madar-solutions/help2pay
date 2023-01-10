<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\EducationPackage;
use App\Models\Order;
use App\Models\User;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'education_package_id' => EducationPackage::factory(),
            'package_name' => $this->faker->regexify('[A-Za-z0-9]{250}'),
            'total' => $this->faker->randomNumber(),
            'user_id' => User::factory(),
            'valid_until' => $this->faker->dateTime(),
            'status' => $this->faker->randomElement(["active","expired","pending","rejected"]),
        ];
    }
}
