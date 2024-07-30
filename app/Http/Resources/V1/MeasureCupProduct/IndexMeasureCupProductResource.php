<?php

namespace App\Http\Resources\V1\MeasureCupProduct;

use App\Http\Resources\V1\MeasureCup\IndexMeasureCupResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class IndexMeasureCupProductResource extends JsonResource
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
            'measure_cup' => new IndexMeasureCupResource($this->measure_cup),
            'value' => $this->value
        ];
    }
}
