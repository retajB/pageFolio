<?php

namespace App\Http\Controllers;

use App\Models\Eotm_title;
use Illuminate\Http\Request;
use App\Models\Section;

class EotmTitleController
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
        'EOTM_title' => 'required|string|max:255',
    ]);
          
        $request=Eotm_title::create([
        'name' => $request->input('EOTM_title'),
         'section_id'=> $section->id,
        ]);


         return redirect()->back()->withInput();
    }

    /**
     * Display the specified resource.
     */
    public function show(Eotm_title $eotm_title)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Eotm_title $eotm_title)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Eotm_title $eotm_title)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Eotm_title $eotm_title)
    {
        //
    }
}
