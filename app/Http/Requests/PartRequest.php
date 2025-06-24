<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PartRequest extends FormRequest
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
        'partners_title'        => 'required|string|max:50',
        'partners_content'      => 'required|string|max:255',
        'partners_image.*'      => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        'partners_image_name.*' => 'required|string|max:100',
    ];

    }
}
