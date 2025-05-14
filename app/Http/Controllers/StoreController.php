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
            $filename = $validated['companyName']. '.' . $file->getClientOriginalExtension(); // Keeps the original extension
            $filePath = $file->storeAs('logos', $filename, 'public');   
        }


        $company = Company::create([
            'name' => $validated['companyName'],
            'email'=> $validated['companyEmail'],
            'phone_number'=> $validated['companyPhone'],
            'domain'=> $validated['domain_url'],
            'logo_url'=> $filePath,
            'slogan'=> $validated['slogan'],
        ]);

        $user = User::create([
            'name' => $validated['userName'],
            'email'=> $validated['userEmail'],
            'phone_number'=> $validated['userPhone'],
            'national_id'=> $validated['national_id'],
            'company_id'=> $company->id
        ]);
        

        $color = Color::create([
        'theme_color1' => $validated['backgroundColor1'],
        'theme_color2' => $validated['backgroundColor2'],
        'text_color' => $validated['textColor'],
        'company_id'=> $company->id
        ]);

        return view('createSuccess');

    }
}
