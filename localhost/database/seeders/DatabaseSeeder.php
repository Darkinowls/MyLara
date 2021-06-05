<?php

namespace Database\Seeders;


use App\Models\Account;
use App\Models\Genre;
use App\Models\Key;
use App\Models\MyCase;
use App\Models\Order;
use App\Models\Platform;
use App\Models\Product;
use App\Models\Review;
use App\Models\User;
use Database\Factories\MyCaseFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        MyCase::factory(3)->create();
        User::factory(20)->create();
        Platform::factory(4)->create();
        Product::factory(10)->create();
        Key::factory(2000)->create();
        Review::factory(20)->create();
        Account::factory(2000)->create();
        Genre::factory(5)->create();
        Order::factory(10)->create();

        $genres = Genre::all();

        Product::all()->each(function ($product) use ($genres) {
            $product->genres()->attach(
                $genres->random(rand(1, 4))->pluck('id')
            );
        });



    }
}
