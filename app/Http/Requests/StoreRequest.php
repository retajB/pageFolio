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


         //user information request 
        'userName'=>'required|string|max:60', 
        'userEmail' =>'required|email|unique:users,email',
        'userPhone' =>'required|string|max:12|min:10',
        'national_id'=>'required|digits:10|min:10',

        
    
        //theme_color information request 
        'backgroundColor1'=>'required', 'regex:/^#(?:[0-9a-fA-F]{3}){1,2}$/',
        'backgroundColor2'=>'required', 'regex:/^#(?:[0-9a-fA-F]{3}){1,2}$/',
        'textColor1'=>'regex:/^#(?:[0-9a-fA-F]{3}){1,2}$/',
        'textColor2'=>'regex:/^#(?:[0-9a-fA-F]{3}){1,2}$/'

    

       ];
    }
}
