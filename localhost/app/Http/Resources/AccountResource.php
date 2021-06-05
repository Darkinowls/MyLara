<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AccountResource extends JsonResource
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
            'email' => $this->email,
            'balance' => $this->balance?? 0,
            'email_password' => $this->email_password,
            'platform_password' => $this->platform_password,
            'platformId' => $this->platformId,
            'product' => new ProductResource($this->product),

        ];
    }
}
