<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\MyCase;
use Illuminate\Database\Eloquent\Factories\Factory;

class CaseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MyCase::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->unique()->word,
            'price' => rand(0,1000),
        ];
    }
}
