<?php

namespace App\Http\Controllers;

use App\Models\Section;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Back_title;

class SectionController
{
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
    public function show(Section $section)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Section $section)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Section $section)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Section $section)
    {
        //
    }

    public function createSectionForm(Page $page)
    {
    $section = Section::where('page_id', $page->id)->first(); 
    // dd($section);
    return view('show_section')->with('section',$section); // متغير البليد
    }

    public function editSectionForm(Page $page)
{
    $section = Section::where('page_id', $page->id)
        ->with([
            'back_title',
            'service_title',
            'objective_title',
            'partner_title',
            'eotm_title',
            'feedback_title',
            'location_title',
            'company_media_accounts' 
        ])
        ->firstOrFail();

    return view('edit_sections', [
        'section' => $section,
        'page' => $page,
    ]);
}


}
