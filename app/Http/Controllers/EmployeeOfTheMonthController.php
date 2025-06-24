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
    public function update(Request $request, Employee_of_the_month $employee_of_the_month)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee_of_the_month $employee_of_the_month)
    {
        //
    }
}
