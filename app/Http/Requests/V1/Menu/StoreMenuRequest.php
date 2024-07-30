<?php

namespace App\Http\Requests\V1\Menu;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreMenuRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'menu_size_id' => ['required' , Rule::exists('menu_sizes' , 'id')],
            'menu_parts' => ['required' , 'array'],
            'menu_parts.*.menu_type_id' => ['required' , Rule::exists('menu_types' , 'id')],
            'menu_parts.*.calories' => ['required' , 'integer'],
            'menu_parts.*.menu_part_products' => ['required' , 'array'],
            'menu_parts.*.menu_part_products.*.product_id' => ['required' , Rule::exists('products' , 'id')],
            'menu_parts.*.menu_part_products.*.measure_cup_count' => ['nullable' , 'integer'],
            'menu_parts.*.menu_part_products.*.measure_type_count' => ['required' , 'integer'],
            'menu_parts.*.menu_part_products.*.calories' => ['required' , 'integer'],
        ];
    }
}
