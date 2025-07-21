<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use App\Models\Company;

class PageController
{

 public function Color_update(Request $request, $id)
{

    $page = Page::findOrFail($id);

    $validated = $request->validate([
        'theme_color1' => 'required|regex:/^#(?:[0-9a-fA-F]{3}){1,2}$/',
        'theme_color2' => 'required|regex:/^#(?:[0-9a-fA-F]{3}){1,2}$/',
        'text_color1' => 'regex:/^#(?:[0-9a-fA-F]{3}){1,2}$/',
        'text_color2' => 'regex:/^#(?:[0-9a-fA-F]{3}){1,2}$/',
    ]);

    $page->update([
        'theme_color1' => $validated['theme_color1'],
        'theme_color2' => $validated['theme_color2'],
        'text_color1' => $validated['text_color1'] ,
        'text_color2' => $validated['text_color2'] ,
    ]);

    return redirect()->back()->with('success', 'Theme colors updated successfully.');
}

    public function listByCompany($companyId)
{
    $company = Company::findOrFail($companyId);
    $pages = Page::where('company_id', $companyId)->get();

    return view('pages', compact('company', 'pages'));
}





    /**
     * Display a listing of the resource.
     */
    public function index(Company $company)

    {
          return view('page_setup', compact('company'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
   public function edit(Page $page)
{
    return view('edit_sections', [
        'page' => $page
    ]);
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Page $page)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Page $page)
{
    $page->delete();
    return redirect()->back()->with('status', 'Page deleted successfully.');
}
}
