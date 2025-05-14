<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRequest;
use App\Models\User;
use App\Models\Company;
use App\Models\Color;

class StoreController
{
    public function store(StoreRequest $request){
        // validate the request

        // take user information and store it in the user table
        // company
        // theme

        // 

        $validated= $request->validated();

        if ($request->hasFile('logo_url')) {
            
    
            $file = $request->file('logo_url');
            $filename = $request->input('companyName') . '.' . $file->getClientOriginalExtension(); // Keeps the original extension
            $filePath = $file->storeAs('logos', $filename, 'public');   
        }


        $company = Company::create([
            'name' => $request->input('companyName'),
            'email'=> $request->input('companyEmail'),
            'phone_number'=> $request->input('companyPhone'),
            'domain'=> $request->input('domain_url'),
            'logo_url'=> $filePath,
            'slogan'=> $request->input('slogan'),
        ]);

        $user = User::create([
            'name' => $request->input('userName'),
            'email'=> $request->input('userEmail'),
            'phone_number'=> $request->input('userPhone'),
            'national_id'=> $request->input('national_id'),
            'company_id'=> $company->id
        ]);


        

        $color = Color::create([
        'theme_color1' => $request->input('backgroundColor1'),
        'theme_color2' => $request->input('backgroundColor2'),
        'text_color' => $request->input('textColor'),
        'company_id'=> $company->id
        ]);

    }
}
