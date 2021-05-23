<?php

namespace App\Http\Resources;

use App\Models\Product;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'price' => $this->price,
            'title' => $this->title,
            'description' => $this->description,
            'photo' => $this->photo,
            'platform_id' => $this->platform_id,
            'date' => $this->date,
            'genres' => GenreResource::collection($this->genres),
            'platform' => new PlatformResource($this->platform),

        ];
    }

}
