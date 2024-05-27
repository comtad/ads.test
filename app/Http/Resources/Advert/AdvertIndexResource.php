<?php

namespace App\Http\Resources\Advert;

use App\Http\Resources\Image\ImageResource;
use App\Http\Resources\Message\MessageResource;
use App\Models\Advert;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AdvertIndexResource extends JsonResource
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
            'title' => $this->title,
            'price' => $this->price,
            'time' => $this->created_at->diffForHumans(),
            'image' => ImageResource::make(Image::query()->where('advert_id', $this->id)->first())->resolve(),
        ];
    }
}
