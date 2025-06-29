<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeedRequest extends FormRequest
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
             // العنوان
            'feedback_title'        => 'required|string|max:100',

            'feedback_icon'         => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'feedback_icon_name'    => 'required|string|max:100',

            'feedbacks_userName'    => 'required|array|min:1',
            'feedbacks_userName.*'  => 'required|string|max:50',

            'feedbacks_content'     => 'required|array|min:1',
            'feedbacks_content.*'   => 'required|string|max:255',

            'feedbacks_rating'      => 'required|array|min:1',
            'feedbacks_rating.*'    => 'required|integer|between:1,5',
        ];
    }
}
