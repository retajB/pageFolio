<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ObjecRequest extends FormRequest
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
        'objectives_title' => 'nullable|string|max:30',

        'objectives_content' => 'required|array',
        'objectives_content.*' => 'required|string|max:225',

        'objectives_icon' => 'required|array',
        'objectives_icon.*' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',

        'objectives_icon_name' => 'required|array',
        'objectives_icon_name.*' => 'required|string|max:255',
    ];

    }
}
