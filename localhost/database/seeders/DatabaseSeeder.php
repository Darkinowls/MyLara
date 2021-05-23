<?php

namespace Database\Seeders;


use App\Models\Account;
use App\Models\Genre;
use App\Models\Category_product;
use App\Models\Key;
use App\Models\Order;
use App\Models\Platform;
use App\Models\Product;
use App\Models\Review;
use App\Models\User;
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
        User::factory(20)->create();
        Platform::factory(4)->create();
        Product::factory(20)->create();
        Key::factory(40)->create();
        Review::factory(20)->create();
        Account::factory(30)->create();
        Order::factory(8)->create();
        Genre::factory(5)->create();


        $genres = Genre::all();

        Product::all()->each(function ($user) use ($genres) {
            $user->categories()->attach(
                $genres->random(rand(1, 3))->pluck('id')->toArray()
            );
        });



    }
}
