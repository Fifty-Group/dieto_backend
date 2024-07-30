<?php

namespace App\Http\Resources\V1\Product;

use App\Http\Resources\V1\MeasureCup\IndexMeasureCupResource;
use App\Http\Resources\V1\MeasureCupProduct\IndexMeasureCupProductResource;
use App\Http\Resources\V1\MeasureType\IndexMeasureTypeResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ShowProductResource extends JsonResource
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
            'title' => json_decode($this->title),
            'measure_type' => new IndexMeasureTypeResource($this->measure_type),
            'calories' => $this->calories,
            'measure_cup' => new IndexMeasureCupResource($this->measure_cup),
            'measure_cup_value' => $this->measure_cup_value,
            'image' => $this->image ? config('app.url').$this->image :null,
            // 'measure_description' => $this->measure_description,
            'permission_description' => $this->permission_description ? json_decode($this->permission_description):null,
        ];
    }
}
