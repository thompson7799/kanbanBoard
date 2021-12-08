<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\BoardColumnItemResource;

class BoardColumnResource extends JsonResource
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
            "column_id" => $this->id,
            "column_title" => $this->title,
            "items" => BoardColumnItemResource::collection($this->whenLoaded('boardColumnItems'))
        ];
    }
}
