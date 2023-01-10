<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\ReferralDepth;

class ReferralDepthFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ReferralDepth::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'depth' => $this->faker->regexify('[A-Za-z0-9]{10}'),
            'percentage' => $this->faker->randomFloat(2, 0, 999999.99),
            'timeStamps' => $this->faker->word,
        ];
    }
}
