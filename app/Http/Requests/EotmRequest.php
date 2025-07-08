<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EotmRequest extends FormRequest
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
            'EOTM_title'             => 'required|string|max:100',

            'employee_name'          => 'required|array|min:1',
            'employee_name.*'        => 'required|string|max:50',

            'employee_content'       => 'required|array|min:1',
            'employee_content.*'     => 'required|string|max:255',

            'employee_image'         => 'array',
            'employee_image.*'       => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',

            'employee_image_name'    => 'required|array',
            'employee_image_name.*'  => 'required|string|max:100',
        ];
    }
}
