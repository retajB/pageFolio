<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRequest;
use App\Models\User;
use App\Models\Company;
use App\Models\Section;
use App\Models\Page;

class StoreController
{
   public function store(StoreRequest $request)
{
    $validated = $request->validated();
    $filePath = null;

    if ($request->hasFile('logo_url')) {
        $file = $request->file('logo_url');
        $filename = $validated['companyName'] . '.' . $file->getClientOriginalExtension();
        $filePath = $file->storeAs('logos', $filename, 'public');
    }

    $company = Company::create([
        'name' => $validated['companyName'],
        'email' => $validated['companyEmail'],
        'phone_number' => $validated['companyPhone'],
        'domain' => $validated['domain_url'],
        'logo_url' => $filePath,
        'slogan' => $validated['slogan'],
    ]);

    $user = User::create([
        'name' => $validated['userName'],
        'email' => $validated['userEmail'],
        'phone_number' => $validated['userPhone'],
        'national_id' => $validated['national_id'],
        'company_id' => $company->id,
    ]);

    return redirect()->route('page.setup', ['company' => $company->id]);
}

public function storePage(Request $request, Company $company)
{
    $validated = $request->validate([
        'layout' => 'required|in:1,2',
        'layout_name' => 'required|string',
        'backgroundColor1' => 'required|string',
        'backgroundColor2' => 'required|string',
        'textColor1' => 'required|string',
        'textColor2' => 'required|string',
        'sections' => 'array'
    ]);

    $page = Page::create([
        'layout' => $validated['layout'],
        'page_name' => $validated['layout_name'],
        'theme_color1' => $validated['backgroundColor1'],
        'theme_color2' => $validated['backgroundColor2'],
        'text_color1' => $validated['textColor1'],
        'text_color2' => $validated['textColor2'],
        'company_id' => $company->id,
    ]);

    $sections = $request->input('sections', []);

    Section::create([
        'who_we_are' => in_array('who_we_are', $sections),
        'services' => in_array('services', $sections),
        'objectives' => in_array('objectives', $sections),
        'partners' => in_array('partners', $sections),
        'feedbacks' => in_array('feedbacks', $sections),
        'employee_of_the_months' => in_array('employee_of_the_months', $sections),
        'social_media' => in_array('social_media', $sections),
        'locations' => in_array('locations', $sections),
        'page_id' => $page->id,
    ]);

    return redirect()->route('show_section.page', ['page' => $page->id]);
}

}
