<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\EducationPackage;

class EducationPackageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EducationPackage::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->text,
            'price' => $this->faker->randomNumber(),
            'sort_order' => $this->faker->randomNumber(),
            'duration' => $this->faker->randomNumber(),
            'status' => $this->faker->randomElement(["enabled","disabled"]),
        ];
    }
}
