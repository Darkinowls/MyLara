<?php

use App\Http\Controllers\Api\AccountController;
use App\Http\Controllers\Api\CustomController;
use App\Http\Controllers\Api\GenreController;
use App\Http\Controllers\Api\KeyController;
use App\Http\Controllers\Api\MyCaseController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\PlatformController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\ReviewController;
use App\Http\Controllers\Api\UserController;
use App\Http\Resources\ProductResource;
use App\Models\Platform;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
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
    'cases' => MyCaseController::class,
]);


Route::get('/products/{from}/{to}', [CustomController::class, 'getProductsFromTo']);
Route::get('random/products/{num}', [CustomController::class, 'randomProducts']);
Route::get('/{platform}/products/{from}/{to}', [CustomController::class, 'platformProductsFromTo']);


Route::get('/', function () {
    return view('welcome');
});
