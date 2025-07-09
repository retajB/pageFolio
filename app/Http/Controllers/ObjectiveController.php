<?php

namespace App\Http\Controllers;

use App\Models\Objective;
use App\Models\Objective_title;
use App\Models\Section;
use App\Http\Controllers\Controller;
use App\Models\Icon;
use Illuminate\Http\Request;
use App\Http\Requests\ObjecRequest;


class ObjectiveController
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
    public function store(ObjecRequest $request , Section $section)
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
            $filePath = $file->storeAs('objectives', $filename, 'public');
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
    public function show(Objective $objective)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Objective $objective)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ObjecRequest $request, Section $section, Objective_title $objective_title)
{
    $validated = $request->validated();

    // تحديث عنوان القسم
    $objective_title->update([
        'section_name' => $validated['objectives_title'],
    ]);

    $contents       = $validated['objectives_content'];
    $icon_names     = $validated['objectives_icon_name'];
    $icons          = $request->file('objectives_icon'); // غير موجود في validated
    $objective_ids  = $request->input('objective_id');
    $icon_ids       = $request->input('icon_id');

    foreach ($contents as $index => $content) {
        $filePath = null;
        $icon = null;

        // إذا فيه أيقونة جديدة مرفوعة
        if (isset($icons[$index]) && $icons[$index] != null) {
            $file = $icons[$index];
            $filename = $icon_names[$index] . '.' . $file->getClientOriginalExtension();
            $filePath = $file->storeAs('objectives', $filename, 'public');

            // تحديث الأيقونة الحالية
            if (!empty($icon_ids[$index])) {
                $icon = \App\Models\Icon::find($icon_ids[$index]);
                if ($icon) {
                    $icon->update([
                        'icon_url'  => $filePath,
                        'icon_name' => $icon_names[$index],
                    ]);
                }
            }
        }

        // تحديث الهدف
        if (!empty($objective_ids[$index])) {
            $objective = \App\Models\Objective::find($objective_ids[$index]);
            if ($objective) {
                $objective->update([
                    'content'             => $content,
                    'objective_title_id'  => $objective_title->id,
                    // نحتفظ بنفس icon_id إذا ما تم رفع صورة جديدة
                ]);
            }
        }
    }

    session()->flash('update_success_' . $section->id, true);
    return redirect()->back();
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Objective $objective)
    {
        //
    }
}
