<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class workspacesResource extends JsonResource
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
            'name' => $this->name,
            'image' => $this->image,
            'capacity' => $this->capacity,
            'work_space_type' => $this->workSpaceType->type,
//            'workspaces' => $this->workspaces,
        ];
    }
}


