<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class mediaRequest extends FormRequest
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
        'media_url' => 'required | array',
        'media_url.*' => 'required | url',

        'media_icon' => 'array',
        'media_icon.*' => ' file | mimes:jpg,jpeg,png,svg | max:2048',

        'media_icon_name' => ' array',
        'media_icon_name.*' => ' string | max:255',
    ];
    }
}
