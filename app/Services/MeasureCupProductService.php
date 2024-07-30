<?php

namespace App\Services;

use App\Models\V1\MeasureCupProduct;

class MeasureCupProductService
{
    public static function store_data($array, $product)
    {
        if (is_array($array)) {
            MeasureCupProduct::where('product_id', $product->id)->delete();
            MeasureCupProduct::create([
                'product_id' => $product->id,
                'measure_cup_id' => $array['measure_cup_id'],
                'value' => $array['value']
            ]);
        }
    }
}
