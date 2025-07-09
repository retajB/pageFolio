<?php

namespace App\Http\Controllers;

use App\Models\Employee_of_the_month;
use App\Http\Controllers\Controller;
use App\Http\Requests\EotmRequest;
use App\Models\Eotm_title;
use App\Models\Section;
use App\Models\Image;
use Illuminate\Http\Request;

class EmployeeOfTheMonthController
{
    /**
     * Display a listing of the resource.
     */
   
      public function index()
{
    // جلب بيانات موظفي الشهر مع العنوان والصورة
    $EOTM = Employee_of_the_month::with(['eotm_title', 'image'])->get();

    // استخراج عنوان القسم (مرة وحدة)
    $eotmTitle = $EOTM->first()?->eotm_title;

    $section = $eotmTitle ? [
        'id' => $eotmTitle->id,
        'section_name' => $eotmTitle->section_name,
        'section_id' => $eotmTitle->section_id,
    ] : null;

    // حذف التكرار من كل عنصر
    $EOTM->each(function ($item) {
        unset($item->eotm_title);
    });

    return response()->json([
        'message' => 'employee_of_the_month info received successfully',
        'section' => $section,
        'employee_of_the_month' => $EOTM
    ]);
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
public function store(EotmRequest $request, Section $section)
{
    $validated = $request->validated();

    // نحفظ عنوان السكشن
    $eotm_title = Eotm_title::create([
        'section_name'   => $validated['EOTM_title'],
        'section_id' => $section->id,
    ]);

    // نحصل على البيانات كمصفوفات
    $employees_names    = $validated['employee_name'];
    $employees_contents  = $validated['employee_content'];
    $image_names        = $validated['employee_image_name'] ;
    $images             = $request->file('employee_image') ;

    foreach ($employees_names as $index => $employee_name) {

        // حفظ الصورة إن وُجدت
        if (isset($images[$index]) && $images[$index] != null) {
            $file = $images[$index];
            $filename = $image_names[$index] . '.' . $file->getClientOriginalExtension();
            $filePath = $file->storeAs('eotms', $filename, 'public');
        }

        $image = Image::create([
            'image_url'  => $filePath,
            'image_name' => $image_names[$index] ,
        ]);

        // نحفظ الموظف
        $image->employee_of_the_month()->create([
            'employee_name'      => $employee_name,
            'content' => $employees_contents[$index],
            'image_id'           => $image->id,
            'eotm_title_id'      => $eotm_title->id
        ]);
    }

    // نستخدم session مخصصة للقسم
    session()->put('saved_eotm_' . $section->id, true);

    return redirect()->back();
}


    /**
     * Display the specified resource.
     */
    public function show(Employee_of_the_month $employee_of_the_month)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee_of_the_month $employee_of_the_month)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
   public function update(EotmRequest $request, Section $section, Eotm_title $eotm_title)
{
    $validated = $request->validated();

    // تحديث عنوان القسم
    $eotm_title->update([
        'section_name' => $validated['EOTM_title'],
    ]);

    $employee_ids       = $request->input('employee_id');
    $image_ids          = $request->input('employee_image_id');
    $employee_names     = $validated['employee_name'];
    $employee_contents  = $validated['employee_content'];
    $image_names        = $validated['employee_image_name'];
    $images             = $request->file('employee_image');

    foreach ($employee_names as $index => $name) {
        $filePath = null;
        $image = null;

        // إذا فيه صورة جديدة مرفوعة
        if (isset($images[$index]) && $images[$index] != null) {
            $file = $images[$index];
            $filename = $image_names[$index] . '.' . $file->getClientOriginalExtension();
            $filePath = $file->storeAs('eotms', $filename, 'public');

            // تحديث الصورة الحالية
            if (!empty($image_ids[$index])) {
                $image = \App\Models\Image::find($image_ids[$index]);
                if ($image) {
                    $image->update([
                        'image_url'  => $filePath,
                        'image_name' => $image_names[$index],
                    ]);
                }
            }
        }

        // تحديث بيانات الموظف
        if (!empty($employee_ids[$index])) {
            $employee = \App\Models\Employee_of_the_month::find($employee_ids[$index]);
            if ($employee) {
                $employee->update([
                    'employee_name' => $name,
                    'content'       => $employee_contents[$index],
                    'eotm_title_id' => $eotm_title->id,
                    // نحتفظ بنفس image_id إذا ما تم رفع صورة جديدة
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
    public function destroy(Employee_of_the_month $employee_of_the_month)
    {
        //
    }
}
