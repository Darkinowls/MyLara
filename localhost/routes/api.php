<?php

use App\Http\Controllers\Api\AccountController;
use App\Http\Controllers\Api\GenreController;
use App\Http\Controllers\Api\KeyController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\PlatformController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\ReviewController;
use App\Http\Controllers\Api\UserController;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::apiResources([
    'orders' => OrderController::class,
    'reviews' => ReviewController::class,
    'keys' => KeyController::class,
    'users' => UserController::class,
    'products' => ProductController::class,
    'platforms' => PlatformController::class,
    'accounts' => AccountController::class,
    'genres' => GenreController::class,
]);

Route::get('products/{from}/{to}', function ($from, $to) {
    $ids=[];
    for (;$from<=$to; $to--)array_push($ids,$to);
    return ProductResource::collection(Product::all()->find($ids));
});

Route::get('/', function () {
    return view('welcome');
});
