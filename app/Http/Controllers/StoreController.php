<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRequest;
use App\Models\User;
use App\Models\Company;
use App\Models\Color;
use App\Models\Section;

class StoreController
{
    public function store(StoreRequest $request){

        $validated= $request->validated();
        $sections = $request->input('sections', []);


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

 if (count($sections) > 0) {
        // تخزين البيانات في الجدول
        Section::create([
            'who_we_are' => in_array('who_we_are', $sections),
            'services' => in_array('services', $sections),
            'objectives' => in_array('objectives', $sections),
            'partners' => in_array('partners', $sections),
            'feedbacks' => in_array('feedbacks', $sections),
            'employee_of_the_months' => in_array('employee_of_the_months', $sections),
            'social_media' => in_array('social_media', $sections),
            'locations' => in_array('locations', $sections),
            'company_id' => $company->id,
        ]);
    }

        return view('createSuccess');

    }
}
