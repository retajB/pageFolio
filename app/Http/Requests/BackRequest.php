<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BackRequest extends FormRequest
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
             'background_title'   => 'required|string|max:30',
             'background_content' => 'required|string',
             'background_image'   => 'image|mimes:jpeg,png,jpg,gif,webp,|max:2048', // 2MB
             'background_image_name'=>'nullable|string' ,
        ];
    }
}
