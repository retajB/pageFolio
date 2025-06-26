<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\FeedRequest;
use App\Models\Objective_title;
use App\Models\Section;
use App\Models\Icon;


use App\Http\Controllers\ObjectiveController;

class FeedbackController
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
    public function store(FeedRequest $request , Section $section)
    {
         $validated = $request->validated();

    //  نحفظ عنوان السكشن 
    $objective_title = Objective_title::create([
        'section_name'       => $validated['objectives_title'],
        'section_id' => $section->id,
    ]);

    //  نحصل على البيانات كمصفوفات
    $contents     = $validated['objectives_content'];
    $icon_names  = $validated['objectives_icon_name'];
    $icons       = $request->file('objectives_icon'); // هذا ما يجي في validated

    foreach ($contents as $index => $content) {

        // $filePath = null;

        if (isset($icons[$index]) && $icons[$index] != null) {
            $file = $icons[$index];
            $filename = $icon_names[$index] . '.' . $file->getClientOriginalExtension();
            $filePath = $file->storeAs('services', $filename, 'public');
        }

        // حفظ الصورة 
        $icon = Icon::create([
            'icon_url'  => $filePath,
            'icon_name' => $icon_names[$index],
        ]);

        // إنشاء الخدمة المرتبطة
        $icon->objective()->create([
            'content'    => $content,
            'icon_id'   => $icon->id,
            'objective_title_id' => $objective_title->id
        ]);
    }

    session()->put('saved_objectives_' . $section->id, true);

    return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Feedback $feedback)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Feedback $feedback)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Feedback $feedback)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Feedback $feedback)
    {
        //
    }
}
