<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ServRequest;
use App\Models\Image;
use App\Models\Section;
use App\Models\Service_title;
 use Illuminate\Support\Facades\Storage;

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

    // حفظ عنوان القسم
    $services_title = Service_title::create([
        'section_name' => $validated['services_title'],
        'section_id'   => $section->id,
    ]);

    // استرجاع الحقول كمصفوفات
    $contents     = $validated['services_content'];
    $image_names  = $validated['services_image_name'];
    $images       = $request->file('services_image'); // الملفات لا تدخل في validated

    foreach ($contents as $index => $content) {
        $filePath = null;

        // التحقق من وجود صورة في هذا السطر
        if (isset($images[$index]) && $images[$index]) {
            $file     = $images[$index];
            $filename = $image_names[$index] . '.' . $file->getClientOriginalExtension();
            $filePath = $file->storeAs('services', $filename, 'public');
        }

        // إنشاء الخدمة أولاً
        $service = Service::create([
            'content'            => $content,
            'service_title_id'   => $services_title->id,
        ]);

        // إنشاء الصورة وربطها بالخدمة
        $image = Image::create([
            'image_url'  => $filePath,
            'image_name' => $image_names[$index],
            'service_id' => $service->id,
        ]);

        $service->save();
    }

    session()->put('saved_services_' . $section->id, true);

    return redirect()->back();
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Section $section)
{
    
}



    /**
     * Update the specified resource in storage.
     */
    
 public function update(ServRequest $request, Section $section, Service_title $service_title)
{
    $validated    = $request->validated();

    // تحديث عنوان القسم
    $service_title->update([
        'section_name' => $validated['services_title'],
        'section_id' => $section->id,
    ]);

    $contents     = $validated['services_content'];
    $image_names  = $validated['services_image_name'];
    $images       = $request->file('services_image');
    $service_ids  = $request->input('service_id');
    $image_ids    = $request->input('image_id');

    foreach ($contents as $index => $content) {
        $filePath = null;
        $image = null;

        // إذا فيه صورة جديدة مرفوعة
        if (isset($images[$index]) && $images[$index] != null) {
            $file = $images[$index];
            $filename = $image_names[$index] . '.' . $file->getClientOriginalExtension();
            $filePath = $file->storeAs('services', $filename, 'public');

            // نحدث الصورة بنفس ID
            if (!empty($image_ids[$index])) {  // اذا الصورة بنفس الاي دي موجود , بنحدث نفس الاي دي بصورة مختلفه
                $image = Image::find($image_ids[$index]); // اوجد الصوره
                if ($image) { // لقيتها؟ هيا حدثها الان
                    $image->update([
                        'image_url' => $filePath,
                        'image_name' => $image_names[$index],
                    ]);
                }
            }
        }

        // تحديث الخدمة
        if (!empty($service_ids[$index])) {
            $service = Service::find($service_ids[$index]);
            if ($service) {
                $service->update([
                    'content'          => $content,
                    'service_title_id' => $service_title->id,
                    // ما نغيّر image_id لأنه نفس الصورة القديمة
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
   

public function destroy(Service $service)
{
    // حذف الصورة من التخزين أولاً
    if ($service->image?->image_url) {
        Storage::disk('public')->delete($service->image->image_url);
    }
    $service->delete();

    return redirect()->back();
}

}
