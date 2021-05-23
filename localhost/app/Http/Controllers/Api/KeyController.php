<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\KeyRequest;
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
     * @param \Illuminate\Http\Request $request
     * @return KeyResource
     */
    public function store(KeyRequest $request)
    {
        $key = new Key($request->all());
        $key->created_at = now()->timestamp;

        //$key->save();

        return new KeyResource($key);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return KeyResource
     */
    public function show($id)
    {
        return new KeyResource(Key::all()->find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
