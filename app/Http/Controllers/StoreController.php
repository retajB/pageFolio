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

        $company = Company::create([
            'name' => $request->input('company.name'),
            'email'=> $request->input('company.email'),
            'phone_number'=> $request->input('company.phone'),
            'domain'=> $request->input('domain_url'),
            'logo_url'=> $request->input('logo_url'),
            'slogan'=> $request->input('slogan'),
        ]);

        $user = User::create([
            'name' => $request->input('user.name'),
            'email'=> $request->input('user.email'),
            'phone_number'=> $request->input('user.phone'),
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
