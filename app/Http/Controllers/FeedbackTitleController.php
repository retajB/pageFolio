<?php

namespace App\Http\Controllers;

use App\Models\Feedback_title;
use Illuminate\Http\Request;
use App\Models\Section;

class FeedbackTitleController
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
        'feedback_title' => 'required|string|max:255',
    ]);
          
        $request=Feedback_title::create([
        'name' => $request->input('feedback_title'),
         'section_id'=> $section->id,
        ]);


         return redirect()->back()->withInput();
    }

    /**
     * Display the specified resource.
     */
    public function show(Feedback_title $feedback_title)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Feedback_title $feedback_title)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Feedback_title $feedback_title)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Feedback_title $feedback_title)
    {
        //
    }
}
