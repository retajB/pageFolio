<?php

namespace App\Http\Controllers;

use App\Models\Objective_title;
use Illuminate\Http\Request;
use App\Models\Section;

class ObjectiveTitleController
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
        'objective_title' => 'required|string|max:255',
    ]);
          
        $request=Objective_title::create([
        'name' => $request->input('objective_title'),
         'section_id'=> $section->id,
        ]);


         return redirect()->back()->withInput();
    }


    /**
     * Display the specified resource.
     */
    public function show(Objective_title $objective_title)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Objective_title $objective_title)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Objective_title $objective_title)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Objective_title $objective_title)
    {
        //
    }
}
