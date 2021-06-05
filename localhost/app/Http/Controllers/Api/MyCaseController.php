<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\MyCaseRequest;
use App\Http\Resources\MyCaseResource;
use App\Models\MyCase;
use Illuminate\Http\Request;

class MyCaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return MyCaseResource::collection(MyCase::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return MyCaseResource
     */
    public function store(MyCaseRequest $request)
    {
        $case = new MyCase($request->all());
        if (!$case->id)$case->id = MyCase::all()->last()->id + 1;
        $case->created_at = now()->timestamp;

        $case->save();

        return new MyCaseResource($case);
    }

    /**
     * Display the specified resource.
     *
     * @param MyCase $case
     * @return MyCaseResource
     */
    public function show(MyCase $case)
    {
        return new MyCaseResource($case);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param MyCaseRequest $request
     * @param MyCase $case
     * @return MyCaseResource
     */
    public function update(MyCaseRequest $request, MyCase $case)
    {
        $case->update($request->validated());

        return new MyCaseResource($case);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param MyCase $case
     * @return \Illuminate\Http\Response
     */
    public function destroy(MyCase $case)
    {
        $case->delete();
        return response(null, 204);
    }
}
