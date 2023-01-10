<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Order;
use App\Models\Payment;
use App\Models\User;
use App\Models\Wallet;

class PaymentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Payment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'wallet_id' => Wallet::factory(),
            'user_id' => User::factory(),
            'order_id' => Order::factory(),
            'status' => $this->faker->randomElement(["complated","pending","expired"]),
            'transfer_status' => $this->faker->randomElement(["pending","complated","failed"]),
        ];
    }
}
