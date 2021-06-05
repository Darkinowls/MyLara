<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Http\Resources\ProductResource;
use App\Models\Genre;
use App\Models\Genre_Product;
use App\Models\Product;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return ProductResource::collection(Product::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return ProductResource
     */
    public function store(ProductRequest $request)
    {

        $product = new Product($request->all());
        if($product)$product->id = Product::all()->last()->id + 1;
        $product->created_at = now()->timestamp;

        $product->genres()->attach($request->genres);
        $product->save();

        return new ProductResource($product);

    }

    /**
     * Display the specified resource.
     *
     * @param $slug
     * @return ProductResource
     */
    public function show($slug)
    {
        if (is_numeric($slug)) return new ProductResource(Product::all()->find($slug));
        return new ProductResource(Product::all()->where('slug', $slug)->first());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ProductRequest $request
     * @param Product $product
     * @return ProductResource
     */
    public function update(ProductRequest $request, Product $product)
    {
        $product->genres()->detach();
        $product->genres()->attach($request->genres);

        $product->update($request->validated());

        return new ProductResource($product);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Product $product
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */

    public function destroy(Product $product)
    {
        $product->genres()->detach();
        $product->delete();
        return response(null, 204);
    }
}
