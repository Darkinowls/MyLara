<?php

namespace Database\Factories;

use App\Models\Platform;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {


        return [
            'price' => rand(100, 5000),
            'title' => $this->faker->unique()->word(),
            'description' => $this->faker->text(),
            'photo' => 'https://drive.google.com/file/d/1juZJVpc-6URWc3Di86qCGhZkxEBMS5_n/view?usp=sharing',
            'platform_id' => Platform::all()->random(),
            'date' => $this->faker->date('d.m.Y'),
        ];
    }
}
