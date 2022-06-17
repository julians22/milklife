<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Http\Resources\Json\JsonResource;


class ProductVariantResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'slug' => $this->slug,
            'flavor' => $this->flavor,
            'size' => $this->size,
            'image' => $this->image,
            'variant_id' => $this->variant_id,
            'variant_name' => $this->variant->name,
        ];
    }
}
