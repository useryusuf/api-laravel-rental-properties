<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LessorResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'name' => $this->name,
            'email' => $this->email,
            'address' => $this->address,
            "avatar" => $this->avatar,
            "phone1" => $this->phone1,
            "phone2" => $this->phone2,
            "likes" => LikeResource::collection($this->likes),
            "reviews" => ReviewResource::collection($this->reviews),
            "comments" => CommentResource::collection($this->comments),
            "properties" => PropertyResource::collection($this->properties),
            "rating" => $this->reviews_count,
        ];
    }
}
