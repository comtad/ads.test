<?php

namespace App\Http\Resources\Advert;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GetDecriptionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'text' => $this->description,
        ];
    }
}
