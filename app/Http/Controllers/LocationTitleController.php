<?php

namespace App\Http\Controllers;

use App\Models\Location_title;
use Illuminate\Http\Request;
use App\Models\Section;

class LocationTitleController
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
        'location_title' => 'required|string|max:255',
    ]);
          
        $request=Location_title::create([
        'name' => $request->input('location_title'),
         'section_id'=> $section->id,
        ]);


         return redirect()->back()->withInput();
    }

    /**
     * Display the specified resource.
     */
    public function show(Location_title $location_title)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Location_title $location_title)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Location_title $location_title)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Location_title $location_title)
    {
        //
    }
}
