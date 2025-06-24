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
 public function index()
{
    // اجيب الخدمات مع الصورة والعنوان
    $services = Service::with(['service_title', 'image'])->get();

    // استخراج عنوان القسم من أول خدمة (إذا موجود)
    $serviceTitle = $services->first()->service_title ?? null;

    $section = $serviceTitle ? [
        'id' => $serviceTitle->id,
        'name' => $serviceTitle->name,
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

    // أولاً: نحفظ عنوان السكشن (title)
    $services_title = Service_title::create([
        'name'       => $validated['services_title'],
        'section_id' => $section->id,
    ]);

    // ثانياً: نحصل على البيانات كمصفوفات
    $contents     = $validated['services_content'];
    $image_names  = $validated['services_image_name'];
    $images       = $request->file('services_image'); // هذا لا يجي في validated

    // نتأكد إن الأعداد متساوية
    foreach ($contents as $index => $content) {

        // افتراضي: بدون صورة
        $filePath = null;

        if (isset($images[$index]) && $images[$index] != null) {
            $file = $images[$index];
            $filename = $image_names[$index] . '.' . $file->getClientOriginalExtension();
            $filePath = $file->storeAs('services', $filename, 'public');
        }

        // حفظ الصورة (إذا فيه)
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

    return redirect()->back()->with([
        'saved' => true,
        'section_id' => $section->id,
    ]);
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
