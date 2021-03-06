<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class providerDetailsResource extends JsonResource
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
            'logo' => $this->logo,
            'name' => $this->name,
            'Location' => $this->address,
            'attributes' =>  providerAttributeResource::collection($this->providerAttributes),
            'workspaces' => workspacesResource::collection($this->workspaces),
        ];
    }
}
