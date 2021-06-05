<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\KeyRequest;
use App\Http\Resources\GenreResource;
use App\Http\Resources\KeyResource;
use App\Models\Key;
use App\Models\Product;
use Illuminate\Http\Request;

class KeyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return KeyResource::collection(Key::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param KeyRequest $request
     * @return KeyResource
     */
    public function store(KeyRequest $request)
    {
        $key = new Key($request->all());
        if (!$key->id)$key->id = Key::all()->last()->id + 1;
        $key->created_at = now()->timestamp;

        $key->save();

        return new KeyResource($key);
    }

    /**
     * Display the specified resource.
     *
     * @param Key $key
     * @return KeyResource
     */
    public function show(Key $key)
    {
        return new KeyResource($key);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Key $key
     * @return KeyResource
     */
    public function update(KeyRequest $request, Key $key)
    {
        $key->update($request->validated());

        return new KeyResource($key);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Key $key
     * @return \Illuminate\Http\Response
     */
    public function destroy(Key $key)
    {
        $key->delete();
        return response(null, 204);
    }
}
