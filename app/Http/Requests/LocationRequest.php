<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LocationRequest extends FormRequest
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
            'location_title'         => 'required|string|max:100',

            'locations_content'      => 'nullable|array|min:1',
            'locations_content.*'    => 'nullable|string|max:255',

            'locations_city'         => 'required|array|min:1',
            'locations_city.*'       => 'nullable|string|max:100',

            'locations_image'          => 'required|array|min:1',
            'locations_image.*'        => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            
            'locations_url'         => 'required|array|min:1',
            'locations_url.*'       => 'nullable|string|max:100',

            'location_image_name' => 'required|array',
            'location_image_name.*' => 'required|string|max:255',
        ];
    }
}
