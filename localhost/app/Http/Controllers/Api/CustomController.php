<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Platform;
use App\Models\Product;
use Illuminate\Http\Request;

class CustomController extends Controller
{
    public function getProductsFromTo ($from , $to){
        $ids = [];
        for (; $from <= $to; $to--) array_push($ids, $to);
        return ProductResource::collection(Product::all()->find($ids));
    }

    public function randomProducts($num){
        return ProductResource::collection(Product::all()->random($num));
    }

    public function platformProductsFromTo($platform_name, $from, $to) {

    $platformId = Platform::all()->where('name', $platform_name)->first()->id;
    $all = Product::all()->where('platformId', $platformId)->take($to);
    for ($i = 1; $i < $from; $i++) $all->shift();
    return ProductResource::collection($all);

    }

}
