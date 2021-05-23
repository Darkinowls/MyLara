<?php

namespace Database\Factories;

use App\Models\Genre;
use App\Models\Category_product;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class Genre_ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category_product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'genre_id' => Genre::all()->random(),
            'product_id' => Product::all()->random(),
        ];
    }
}
