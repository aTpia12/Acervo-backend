<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\EnclosureResource;

class ArtworkResource extends JsonResource
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
            'inventory' => $this->inventory,
            'enclosure_id' => $this->enclosure_id,
            'closure_now' => $this->closure_now,
            'collection' => $this->collection,
            'title' => $this->title,
            'technique' => $this->technique,
            'measures' => $this->measures,
            'type' => $this->type,
            'enclosure' => EnclosureResource::make($this->whenLoaded('enclosure')),
        ];
    }
}
