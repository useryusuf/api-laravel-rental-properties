<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PropertyResource extends JsonResource
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
            'description' => $this->description,
            'price' => $this->price,
            'deposite' => $this->deposite,
            'space' => $this->space,
            'city' => $this->city,
            'address' => $this->address,
            'rentingType' => $this->renting_type,
            'readyDate' => $this->ready_date,
            'rooms' => $this->rooms,
            'images' => json_decode($this->images),
            'category' => $this->category,
            'lessorId' => $this->user_id,
            "likes" => LikeResource::collection($this->likes),
            "reviews" => ReviewResource::collection($this->reviews),
            "comments" => CommentResource::collection($this->comments),
            'createdAt' => $this->created_at,
            'updatedAt' => $this->updated_at,
        ];
    }
}
