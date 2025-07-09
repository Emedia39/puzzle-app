<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ItemResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request)
    {
        return [
            'name' => $this->name,
            'type' => $this->type,
            'effect' => $this->effect,
            'created_at' => $this->created_at
                ->format('Y/m/d H:i:s')

        ];
    }
}
