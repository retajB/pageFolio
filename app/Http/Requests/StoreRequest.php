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

            //company information request 
        'companyName'=>'required|string|max:60',
        'companyEmail'=>'required|email|unique:companies,email',
        'companyPhone'=>'required|string|max:12|min:10',
        'domain_url' => 'required|url|max:255',
        'slogan'=>'required|string|max:255',
        'logo_url'=>'nullable',
       'header_photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',


         //user information request 
        'userName'=>'required|string|max:60', 
        'userEmail' =>'required|email|unique:users,email',
        'userPhone' =>'required|string|max:12|min:10',
        'national_id'=>'required|digits:10|min:10',

    

       ];
    }
}
