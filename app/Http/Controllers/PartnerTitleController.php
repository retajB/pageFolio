<?php

namespace App\Http\Controllers;

use App\Models\Partner_title;
use Illuminate\Http\Request;
use App\Models\Section;


class PartnerTitleController
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
    public function store(Request $request, Section $section)
    {
         $request->validate([
        'partners_title' => 'required|string|max:255',
        'sub_partners_title'=>'required|string|max:255'
    ]);
          
        $request=Partner_title::create([
        'name' => $request->input('partners_title'),
         'sub_title' => $request->input('sub_partners_title'),
         'section_id'=> $section->id,
        ]);


         return redirect()->back()->withInput();
    }

    /**
     * Display the specified resource.
     */
    public function show(Partner_title $partner_title)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Partner_title $partner_title)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Partner_title $partner_title)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Partner_title $partner_title)
    {
        //
    }
}
