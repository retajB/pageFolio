<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ServRequest;
use App\Models\Image;
use App\Models\Section;
use App\Models\Service_title;

class ServiceController
{
    /**
     * Display a listing of the resource.
     */
 public function index(Service $services)
{
    // اجيب الخدمات مع الصورة والعنوان
   

    $service = Service::with(['service_title', 'image'])->find($services);
    // استخراج عنوان القسم من أول خدمة (إذا موجود)
    $serviceTitle = $services->first()->service_title ?? null;

    $section = $serviceTitle ? [
        'id' => $serviceTitle->id,
        'section_name' => $serviceTitle->section_name,
        'section_id' => $serviceTitle->section_id,
    ] : null;

    // حذف تكرار العنوان من كل خدمة
    $services->each(function ($service) {
        unset($service->service_title);
    });

    return response()->json([
        'message' => 'Services info received successfully',
        'section' => $section,
        'services' => $services
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
    public function store(ServRequest $request, Section $section)
{
    
    $validated = $request->validated();

    //  نحفظ عنوان السكشن 
    $services_title = Service_title::create([
        'section_name'       => $validated['services_title'],
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
//    public function show(Service $service)
// {
//     $service->load(['service_title']);

//     return response()->json([
//         'message' => 'services info received successfully',
//         'data' => $service
//     ]);
// }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        //
    }
}
