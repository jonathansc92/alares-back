<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PlanResource extends JsonResource
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
            'price' => $this->price,
            'wifi' => $this->wifi,
            'games' => $this->games,
            'movies' => $this->movies,
            'speed' => $this->speed,
            'best' => $this->best,
        ];
    }
}
