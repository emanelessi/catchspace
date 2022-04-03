<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class rateResource extends JsonResource
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
            'id'=>$this->id,
            'work_space_id'=>$this->work_space_id,
            'mac_address'=>$this->mac_address,
            'rate'=>$this->rate,
        ];
    }
}
