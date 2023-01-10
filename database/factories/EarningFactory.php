<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Earning;
use App\Models\FromUser;
use App\Models\User;

class EarningFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Earning::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'from_user_id' => FromUser::factory(),
            'amount' => $this->faker->randomFloat(2, 0, 999999.99),
            'percentage' => $this->faker->randomFloat(2, 0, 999999.99),
        ];
    }
}
