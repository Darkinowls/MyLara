<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReviewRequest;
use App\Http\Resources\ReviewResource;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return ReviewResource::collection(Review::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ReviewRequest  $request
     * @return ReviewResource
     */
    public function store(ReviewRequest $request)
    {
        $review = new Review($request->all());
        if (!$review->id) $review->id = Review::all()->last()->id + 1;
        $review->created_at = now()->timestamp;

        $review->save();

        return new ReviewResource($review);
    }

    /**
     * Display the specified resource.
     *
     * @param Review $review
     * @return ReviewResource
     */
    public function show( Review $review)
    {
        return new ReviewResource($review);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ReviewRequest $request
     * @param Review $review
     * @return ReviewResource
     */
    public function update(ReviewRequest $request, Review $review)
    {
        $review->update($request->validated());
        return new ReviewResource($review);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Review $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review)
    {
        $review->delete();
        return response(null, 204);
    }
}
