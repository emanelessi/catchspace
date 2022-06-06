<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class workspaceReservationResource extends JsonResource
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
            'date' => $this->date,
            'worker' => $this->workers->name,
            'work space' => $this->workSpace->name,
            'capacity' => $this->workSpace->capacity,
            'addon name' => $this->workSpaceAddons->addon->name,
            'addon value' => $this->workSpaceAddons->value,
            'pricing' => $this->pricing->price,
            'rent type' => $this->pricing->rentType->type,
        ];
    }
}
