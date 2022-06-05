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
            'price'=>$this->price,
            'rent type' =>  $this->rentType->type,
//            'date'=>$this->workerWorkSpace,
        ];
    }
}