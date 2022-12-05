<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FoodResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'price' => $this->price,
            'qty' => $this->qty,
            'desc_a' => $this->desc_a,
            'desc_b' => $this->desc_b,
            'cal' => $this->cal,
            'url_thumb' => $this->url_thumb,
            'url_vid' => $this->url_vid,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
