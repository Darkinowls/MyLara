<?php

namespace Database\Factories;

use App\Models\Genre;
use App\Models\Category_product;
use App\Models\Genre_Product;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class Genre_ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Genre_Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'genreId' => Genre::all()->random(),
            'productId' => Product::all()->random(),
        ];
    }
}
