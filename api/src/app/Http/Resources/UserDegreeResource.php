<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserDegreeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request)//: array
    {
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'user_result' => $this->user_result,
            'stage_id' => $this->stage_id,
            'stage_result' => $this->stage_result
        ];

        //return parent::toArray($request);
    }
}
