<?php

namespace App\Http\Controllers;

use App\Models\Employee_of_the_month;
use App\Http\Controllers\Controller;
use App\Http\Requests\EotmRequest;
use App\Models\Eotm_title;
use App\Models\Section;
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

    //  نحفظ عنوان السكشن 
    $eotm_title = Eotm_title::create([
        'name'       => $validated['eotm_title'],
        'section_id' => $section->id,
    ]);

    //  نحصل على البيانات كمصفوفات
    $contents     = $validated['services_content'];
    $image_names  = $validated['services_image_name'];
    $images       = $request->file('services_image'); // هذا ما يجي في validated

    foreach ($contents as $index => $content) {

        // $filePath = null;

        if (isset($images[$index]) && $images[$index] != null) {
            $file = $images[$index];
            $filename = $image_names[$index] . '.' . $file->getClientOriginalExtension();
            $filePath = $file->storeAs('services', $filename, 'public');
        }

        // حفظ الصورة 
        $image = Image::create([
            'image_url'  => $filePath,
            'image_name' => $image_names[$index],
        ]);

        // إنشاء الخدمة المرتبطة
        $image->service()->create([
            'title'      => $validated['services_title'],
            'content'    => $content,
            'image_id'   => $image->id,
            'service_title_id' => $services_title->id
        ]);
    }

    session()->put('saved_services_' . $section->id, true);

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
