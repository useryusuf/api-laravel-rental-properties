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
            'cityId' => $this->city_id,
            'address' => $this->address,
            'rentingType' => $this->renting_type,
            'readyDate' => $this->ready_date,
            'rooms' => $this->rooms,
            'category' => $this->category,
            'images' => $this->images,
            'categoryId' => $this->category_id,
            'lessorId' => $this->user_id,
            'createdAt' => $this->created_at,
            'updatedAt' => $this->updated_at,
        ];
    }
}
