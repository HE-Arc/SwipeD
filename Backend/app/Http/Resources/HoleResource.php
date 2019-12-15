<?php

namespace App\Http\Resources;
use App\Score;

use Illuminate\Http\Resources\Json\JsonResource;

class HoleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return $this;
        return [
            'id' => $this->hole_id,
            'number' => $this->hole->number,
            'score' => $this->score,
        ];
    }
}
