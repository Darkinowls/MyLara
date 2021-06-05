<?php

namespace App\Http\Resources;

use App\Models\Key;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        if ($this->keyId)
        return [

            'id' => $this->id,
            'userId' => $this->userId,
            'price' => $this->key->product->price,
            'date' => $this->created_at,
            'key' => new KeyResource($this->key),

        ];


        return [

            'id' => $this->id,
            'userId' => $this->userId,
            'price' => $this->account->product->price,
            'date' => $this->created_at,
            'account' => new AccountResource ($this->account),


        ];


    }
}
