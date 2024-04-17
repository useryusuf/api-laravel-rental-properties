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
            "role" => $this->role,
            'name' => $this->name,
            'email' => $this->email,
            'address' => $this->address,
            "avatar" => $this->avatar,
            "phone1" => $this->phone1,
            "phone2" => $this->phone2,
            "createdAt" => $this->created_at,
            "updatedAt" => $this->updated_at,
            "rating" => $this->reviews_count,
            "likes" => LikeResource::collection($this->likes),
            "reviews" => ReviewResource::collection($this->reviews),
            "comments" => CommentResource::collection($this->comments),
            "properties" => PropertyResource::collection($this->properties),
            "rating" => $this->reviews_count,
        ];
    }
}
