<?php

namespace App\Http\Resources;

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
        if ($this->key)
        return [

            'id' => $this->id,
            'user_id' => $this->user_id,
            'key' => $this->key,
            'price' => $this->price,
            'date' => $this->created_at,

        ];


        return [

            'id' => $this->id,
            'user_id' => $this->user_id,
            'account' => new AccountResource ($this->account),
            'price' => $this->price,
            'date' => $this->created_at,

        ];


    }
}
