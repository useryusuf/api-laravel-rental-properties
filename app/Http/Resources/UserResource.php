<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'email' => $this->email,
            "avatar" => $this->avatar,
            "phone1" => $this->avatar,
            "phone2" => $this->avatar,
            "role" => $this->role,
            "properties" => PropertyResource::collection($this->whenLoaded("properties")),
            "createdAt" => $this->created_at,
            "updatedAt" => $this->updated_at,
            "rating" => $this->reviews_count,
            "properties" => $this->properties,
        ];
    }
}
