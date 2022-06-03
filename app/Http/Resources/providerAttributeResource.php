<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class providerAttributeResource extends JsonResource
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
            'name' => new AttributeResource($this->name),
            'value' => $this->value,
            'attribute_id' => $this->attribute->name,
        ];
    }
}
