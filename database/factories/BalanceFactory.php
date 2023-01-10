<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Balance;
use App\Models\User;

class BalanceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Balance::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'total_earnings' => $this->faker->randomFloat(2, 0, 999999.99),
            'total_withdrawal' => $this->faker->randomFloat(2, 0, 999999.99),
            'total_orders' => $this->faker->randomFloat(2, 0, 999999.99),
            'total_balance_extra' => $this->faker->randomFloat(2, 0, 999999.99),
            'final_balance' => $this->faker->randomFloat(2, 0, 999999.99),
            'timeStamps' => $this->faker->word,
        ];
    }
}
