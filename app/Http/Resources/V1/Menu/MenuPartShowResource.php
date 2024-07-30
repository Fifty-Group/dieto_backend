<?php

namespace App\Http\Resources\V1\Menu;

use App\Http\Resources\V1\MenuType\IndexMenuTypeResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MenuPartShowResource extends JsonResource
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
            'menu_type' => new IndexMenuTypeResource($this->menu_type),
            'status' => $this->status,
            'calories' => $this->calories,
            'menu_part_products' => MenuPartProductShowResource::collection($this->menu_part_products)
        ];
    }
}
