<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\ArtworkResource;

class AuthorResource extends JsonResource
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
            'fisrt_name' => $this->first_name,
            'second_name' => $this->second_name,
            'last_name' => $this->last_name,
            'second_last_name' => $this->second_last_name,
            'birthday' => $this->birthday,
            'place_birth' => $this->place_birth,
            'date_death' => $this->date_death,
            'place_death' => $this->place_death,
            'biography' => $this->biography,
            'artworks' => ArtworkResource::collection($this->whenLoaded('artworks')),
        ];
    }
}
