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
// يتأكد هل الارري فيها هذا الانديكس ولا لا
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
     * Show the form for editing the specified resource.
     */
    public function edit(Section $section)
{
    $serviceTitle = Service_title::where('section_id', $section->id)->first();
    $services = $serviceTitle ? $serviceTitle->services()->with('image')->get() : collect();
    $services_title = $serviceTitle?->section_name ?? '';

    return view('editSections/edit_services', compact('section', 'services', 'services_title'));
}



    /**
     * Update the specified resource in storage.
     */
    
  public function update(ServRequest $request, Section $section)
{
    $validated = $request->validated();

    // تحديث أو إنشاء عنوان القسم
    $serviceTitle = Service_title::updateOrCreate(
        ['section_id' => $section->id],
        ['section_name' => $validated['services_title']]
    );

    $serviceIds = $validated['service_id'] ?? [];
    $contents = $validated['services_content'] ?? [];
    $imageNames = $validated['services_image_name'] ?? [];
    $images = $request->file('services_image') ?? [];

    foreach ($contents as $index => $content) {
        $serviceId = $serviceIds[$index] ?? null;
        $imagePath = $this->storeImage($images[$index] ?? null, $imageNames[$index] ?? null);

        if ($serviceId && $service = Service::find($serviceId)) {
            $service->content = $content;

            if ($imagePath) {
                $image = Image::create($imagePath);
                $service->image_id = $image->id;
            }

            $service->save();
        } else {
            $image = $imagePath ? Image::create($imagePath) : null;

            Service::create([
                'content' => $content,
                'image_id' => $image?->id,
                'service_title_id' => $serviceTitle->id,
            ]);
        }
    }

    session()->put('saved_services_' . $section->id, true);

    return redirect()->back()->with('success', 'تم تحديث البيانات بنجاح');
}

private function storeImage($file, $name): ?array
{
    if (!$file || !$name) {
        return null;
    }

    $filename = $name . '.' . $file->getClientOriginalExtension();
    $path = $file->storeAs('services', $filename, 'public');

    return [
        'image_url' => $path,
        'image_name' => $name,
    ];
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        //
    }
}
