<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServRequest extends FormRequest
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

        'service_id' => 'array',
        'service_id.*' => 'nullable|integer|exists:services,id',

        'services_title' => 'nullable|string|max:30',

        'services_content' => 'required|array',
        'services_content.*' => 'required|string|max:225',

        'services_image' => 'array',
        'services_image.*' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',

        'services_image_name' => 'required|array',
        'services_image_name.*' => 'required|string|max:255',
    ];
}

}
