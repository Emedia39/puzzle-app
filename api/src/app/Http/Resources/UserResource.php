<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'level' => $this->level,
            'experience' => $this->experience,
            'created_at' => $this->created_at
                ->format('Y/m/d H:i:s')

        ];
    }
}
