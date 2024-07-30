<?php

namespace App\Http\Requests\V1\Product;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProductRequest extends FormRequest
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
        $roles = [
            'title' => ['required', 'array'],
            'title.uz' => ['required', 'min:2', 'max:100'],
            'title.ru' => ['required', 'min:2', 'max:100'],
            'measure_type_id' => ['required', Rule::exists('measure_types', 'id')],
            'calories' => ['required', 'integer'],
            'measure_description' => ['nullable', 'string'],
            'image' => ['nullable'],
            'measure_cup_id' => ['nullable', Rule::exists('measure_cups', 'id')],
            'measure_cup_value' => ['nullable', 'integer'],
            'permission_description' => ['nullable', 'array'],
            'permission_description.uz' => ['nullable', 'string'],
            'permission_description.ru' => ['nullable', 'string'],
        ];

        return $roles;
    }
}
