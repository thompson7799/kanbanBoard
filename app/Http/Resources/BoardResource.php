<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\BoardColumnResource;

class BoardResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "board_id" => $this->id,
            "board_name" => $this->name,
            "columns" => BoardColumnResource::collection($this->whenLoaded('boardColumns'))
        ];
    }
}
