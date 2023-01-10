<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Wallet;

class WalletFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Wallet::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'address' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'private_key' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'timeStamps' => $this->faker->word,
        ];
    }
}
