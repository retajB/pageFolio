<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use App\Models\Company;

class PageController
{

 public function Color_update(Request $request, Page $color)
    {
          $validated= $request->validate([
        'backgroundColor1'=>'required', 'regex:/^#(?:[0-9a-fA-F]{3}){1,2}$/',
        'backgroundColor2'=>'required', 'regex:/^#(?:[0-9a-fA-F]{3}){1,2}$/',
        'textColor'=>'regex:/^#(?:[0-9a-fA-F]{3}){1,2}$/',


       ]);


         $color->update([
              'theme_color1'=>$validated['backgroundColor1'],
              'theme_color2'=>$validated['backgroundColor2'],
              'text_color'=>$validated['textColor']
         ]);

         
            return redirect()->back()->withInput();
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
    public function index()
    {
        //
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
        //
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
        //
    }
}
