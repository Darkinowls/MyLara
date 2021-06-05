<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PlatformRequest;
use App\Http\Resources\PlatformResource;
use App\Models\Platform;
use Illuminate\Http\Request;

class PlatformController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return PlatformResource::collection(Platform::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return PlatformResource
     */
    public function store(PlatformRequest $request)
    {
        $platform = new Platform($request->all());
        if (!$platform->id) $platform->id = Platform::all()->last()->id + 1;
        $platform->created_at = now()->timestamp;

        $platform->save();

        return new PlatformResource($platform);
    }

    /**
     * Display the specified resource.
     *
     * @param Platform $platform
     * @return PlatformResource
     */
    public function show(Platform $platform)
    {
        return new PlatformResource($platform);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param PlatformRequest $request
     * @param Platform $platform
     * @return PlatformResource
     */
    public function update(PlatformRequest $request, Platform $platform)
    {
        $platform->update($request->validated());
        return new PlatformResource($platform);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Platform $platform
     * @return \Illuminate\Http\Response
     */
    public function destroy(Platform $platform)
    {
        $platform->delete();
        return response(null, 204);
    }
}
