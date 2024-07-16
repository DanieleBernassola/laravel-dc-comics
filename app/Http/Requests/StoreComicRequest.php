<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
            'title' => 'bail|required|unique:comics,title|min:5|max:100',
            'description' => 'nullable',
            'thumb' => 'nullable',
            'price' => 'nullable',
            'series' => 'nullable',
            'type' => 'nullable',
            'sale_date' => 'nullable',
            'artists' => 'nullable',
            'writers' => 'nullable',
        ];
    }
}
