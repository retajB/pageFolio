<?php

namespace App\Http\Requests;

use Faker\Provider\bg_BG\PhoneNumber;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
         //user information request 
        'user.name'=>'required|string|max:60', 
        'user.email' =>'required|email|unique:users,email',
        'user.phone' =>'required|string|max:12',
        'national_id'=>'required|digits:10',

        //company information request 
        'company.name'=>'required|string|max:60',
        'company.email'=>'required|email|unique:companies,email',
        'company.phone'=>'required|string|max:12',
        'domain_url' => 'required|url|max:255',
        'slogan'=>'required|string|max:255',
        'logo_url'=>'url|max:255',
    
        //theme_color information request 
        'backgroundColor1'=>'required', 'regex:/^#(?:[0-9a-fA-F]{3}){1,2}$/',
        'backgroundColor2'=>'required', 'regex:/^#(?:[0-9a-fA-F]{3}){1,2}$/',
        'textColor'=>'regex:/^#(?:[0-9a-fA-F]{3}){1,2}$/',

        ];
    }
}
