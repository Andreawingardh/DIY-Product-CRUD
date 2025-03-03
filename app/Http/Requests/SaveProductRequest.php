<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveProductRequest extends FormRequest
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
            'name' => 'required|min:10|max:100',
            'description' => 'nullable|min:10',
            'brand_id' => 'required|min:0|max:20',
            'price' => 'required|decimal:0,2',
            'height' => 'nullable|decimal:0,2',
            'width' => 'nullable|decimal:0,2',
            'weight' => 'nullable|decimal:0,2',
            'category_id' => 'required|min:0|max:20',
        ];
    }
}
