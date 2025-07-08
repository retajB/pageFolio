<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Http\Controllers\Controller;
use App\Models\Partner_title;
use App\Models\Section;
use App\Models\Image;
use Illuminate\Http\Request;
use App\Http\Requests\PartRequest;

class PartnerController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partners = Partner::with(['partner_title', 'image'])->get();

        // استخراج العنوان والعنوان الفرعي مرة وحدة فقط من أول عنصر
        $partnerTitle = $partners->first()?->partner_title;

            $section = $partnerTitle ? [
            'id' => $partnerTitle->id,
            'section_name' => $partnerTitle->section_name,
            'sub_title' => $partnerTitle->sub_title,
        ] : null;
        // حذف التكرار من كل بارتنر
        $partners->each(function ($partner) {
            unset($partner->partner_title);
        });

        return response()->json([
            'message' => 'Partners info loaded successfully',
            'section' => $section,
            'partners' => $partners
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
   public function store(PartRequest $request, Section $section)
{

    $validated = $request->validated();

    $partners_title = Partner_title::create([
        'section_name'       => $validated['partners_title'],
        'sub_title'  => $validated['partners_content'],
        'section_id' => $section->id,
    ]);

    $image_names = $validated['partners_image_name'] ;
    $images      = $request->file('partners_image') ;

    foreach ($image_names as $index => $name) {
        //$filePath = null;

        if (isset($images[$index])) {
            $file = $images[$index];
            $filename = $name . '.' . $file->getClientOriginalExtension();
            $filePath = $file->storeAs('partners', $filename, 'public');
        }

        $image = Image::create([
            'image_url'  => $filePath,
            'image_name' => $name,
        ]);

        $image->partner()->create([
            'image_id'         => $image->id,
            'partner_title_id' => $partners_title->id,
        ]);
    }

    session()->put('saved_partners_' . $section->id, true);

    return redirect()->back();
}


    /**
     * Display the specified resource.
     */
    public function show(Partner $partner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Partner $partner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
 public function update(PartRequest $request, Section $section, Partner_title $partner_title)
{
    $validated = $request->validated();

    // تحديث بيانات عنوان القسم
    $partner_title->update([
        'section_name' => $validated['partners_title'],
        'sub_title' => $validated['partners_content'],
        'section_id' => $section->id,
    ]);

    // رفع وتخزين صور الشركاء
    $images = $request->file('partners_image');
    $names  = $request->input('partners_image_name');

    if ($images && $names) {
        foreach ($images as $index => $imageFile) {
            if ($imageFile) {
                $imageName = $names[$index] ?? 'partner_' . time();
                $filename = $imageName . '.' . $imageFile->getClientOriginalExtension();
                $filePath = $imageFile->storeAs('partners', $filename, 'public');

                // إنشاء سجل الصورة
                $image = Image::create([
                    'image_url' => $filePath,
                    'image_name' => $imageName,
                ]);

                // ربط الصورة بعنوان القسم كـ شريك جديد
                Partner::create([
                    'image_id' => $image->id,
                    'partner_title_id' => $partner_title->id,
                ]);
            }
        }
    }

    session()->flash('partner_update_success_' . $section->id, true);
    return redirect()->back();
}
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Partner $partner)
    {
        //
    }
}
