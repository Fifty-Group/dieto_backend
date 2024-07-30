<?php

namespace App\Http\Resources\V1\Menu;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MenuPartProductShowResource extends JsonResource
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
            'measure_cup_count' => $this->measure_cup_count,
            'calories' => $this->calories,
            'measure_type_count' => $this->measure_type_count,
            'product' => new MenuPartProductSelfShowResource($this->product)
        ];
    }
}
