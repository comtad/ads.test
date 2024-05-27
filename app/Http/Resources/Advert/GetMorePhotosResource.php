<?php

namespace App\Http\Resources\Advert;

use App\Http\Resources\Image\ImageResource;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GetMorePhotosResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'image' => $this->link,
        ];
    }
}
