<?php

namespace Database\Factories;

use App\Models\Account;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class AccountFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Account::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'name' => $this->faker->userName(),
            'email' => $this->faker->unique()->safeEmail(),
            'balance' => rand(1, 20000),
            'steam_id' => $this->faker->uuid(),
            'password' => $this->faker->password(),
            'product_id' => Product::all()->random(),

        ];
    }
}
