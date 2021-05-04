<?php

use App\Models\Good;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    $goods = Good::all() ;
    return view('welcome', compact('goods'));
});

Route::get('/good={id}',[App\Http\Controllers\MyController::class, 'good']);

Route::get('/catalog/{id}',[App\Http\Controllers\MyController::class, 'catalog']);

Route::post('/post', [App\Http\Controllers\MyController::class, 'post'])->name('post.comment');



Auth::routes();




