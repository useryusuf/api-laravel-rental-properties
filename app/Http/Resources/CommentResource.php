<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
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
            "user" => $this->user_id,
            "content" => $this->content,
            "isActive" => $this->is_active,
            "createdAt" => $this->created_at,
            "updatedAt" => $this->updated_at

        ];
    }
}
