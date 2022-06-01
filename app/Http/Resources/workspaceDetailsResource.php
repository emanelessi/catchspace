<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class workspaceDetailsResource extends JsonResource
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
//            `id`, LEFT(`name`, 256),  `image`,  `capacity`,  `work_space_type_id`,  `provider_id`,
            'id' => $this->id,
            'image' => $this->image,
            'name' => $this->name,
            'capacity' => $this->capacity,
            'provider' => $this->provider->name,
            'work_space_type' => $this->work_space_type,
            'Pricing' => $this->pricing,
            'addons' => $this->addons,
            'Amenities' => $this->services,
            'Reviews' => $this->reviews,
//            'workspaces' => new workspacesResource($this->workspaces->name),
        ];
    }
}
