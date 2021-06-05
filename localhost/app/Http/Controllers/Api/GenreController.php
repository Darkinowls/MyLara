<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\GenreRequest;
use App\Http\Resources\GenreResource;
use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return GenreResource::collection(Genre::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param GenreRequest $request
     * @return GenreResource
     */
    public function store(GenreRequest $request)
    {
        $genre = new Genre($request->all());
        if (!$genre->id)$genre->id = Genre::all()->last()->id + 1;
        $genre->created_at = now()->timestamp;

        $genre->save();

        return new GenreResource($genre);
    }

    /**
     * Display the specified resource.
     *
     * @param Genre $genre
     * @return GenreResource
     */
    public function show(Genre $genre)
    {
        return new GenreResource($genre);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Genre $genre
     * @return GenreResource
     */
    public function update(GenreRequest $request, Genre $genre)
    {
        $genre->update($request->validated());

        return new GenreResource($genre);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Genre $genre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Genre $genre)
    {
        $genre->delete();
        return response(null, 204);
    }
}
