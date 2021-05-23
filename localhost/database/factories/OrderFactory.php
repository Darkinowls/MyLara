<?php

namespace Database\Factories;

use App\Models\Account;
use App\Models\Key;
use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Helper\Table;

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

        $rand = rand(0, 1);

        return [
            'user_id' => User::all()->random(),

            'account_id' => $rand ? Account::all()->random() : null,
            'key' => $rand ? null : Key::all()->random()->key,

            'price' => rand(1, 20000),
        ];
    }
}
