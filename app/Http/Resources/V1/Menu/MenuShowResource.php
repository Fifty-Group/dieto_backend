<?php

namespace App\Http\Resources\V1\Menu;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MenuShowResource extends JsonResource
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
            'calories' => $this->calories,
            'status' => $this->status,
            'menu_parts' => MenuPartShowResource::collection($this->menu_parts)
        ];
    }
}
