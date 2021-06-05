<?php

namespace Database\Factories;

use App\Models\Account;
use App\Models\Key;
use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;


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
            'userId' => User::all()->random(),

            'accountId' => $rand ? Account::all()->
            whereNotIn('id' , Order::all()->pluck('accountId'))->random() : null,

            'keyId' => $rand ? null : Key::all()->
            whereNotIn('id' , Order::all()->pluck('keyId'))->random(),

            'price' => rand(1, 20000),
        ];
    }
}
