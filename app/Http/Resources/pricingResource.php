<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class pricingResource extends JsonResource
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
//            PEOPLE	DURATION	PRICE	DATE	ADDONS	AVAILABILITY
//            'PEOPLE'=>workspacesCapacityResource::collection($this->WorkSpace),
//            'DURATION' => rentTypesResource::collection($this->rentType),
            'PRICE'=>$this->price,
//            'addons' =>  addonsResource::collection($this->workSpaceAddons),
//            'ADDONS'=>$this->price,
//            'AVAILABILITY'=>$this->,
        ];
    }
}
