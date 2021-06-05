<?php

namespace App\Http\Resources;

use App\Models\Account;
use App\Models\Key;
use App\Models\MyCase;
use App\Models\Order;
use App\Models\Platform;
use App\Models\Product;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

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
            'slug' => $this->slug,
            'price' => $this->price,
            'title' => $this->title,
            'description' => $this->description,
            'photo' => $this->photo,
            'date' => $this->date,
            'genres' => GenreResource::collection($this->genres),
            'platform' => new PlatformResource($this->platform),
            'case' => new MyCaseResource($this->case),
            'type' => [
                'keys' => $this->keys->whereNotIn('id', Order::all()->pluck('keyId'))->count(),
                'accounts' => $this->accounts->whereNotIn('id', Order::all()->pluck('accountId'))->count(),
            ],
        ];
    }


}
