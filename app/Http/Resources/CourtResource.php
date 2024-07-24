<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class courtResource extends JsonResource
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
            'name' => $this->name,
            'address' => $this->address,
            'description' => $this->description,
            'price_per_hour' => $this->price_per_hour,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'court_images' => $this->whenLoaded('court_images', function () {
                return CourtImageResource::collection($this->court_images);
            }),
        ];
    }
}