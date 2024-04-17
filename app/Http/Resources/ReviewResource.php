<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ReviewResource extends JsonResource
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
            'property' => $this->property_id,
            "userId" => $this->user_id,
            "content" => $this->review,
            "rating" => $this->rating,
            "createdAt" => $this->created_at,
            "updatedAt" => $this->updated_at

        ];
    }
}
