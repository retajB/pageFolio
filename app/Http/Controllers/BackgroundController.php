<?php

namespace App\Http\Controllers;

use App\Models\Background;
use App\Http\Controllers\Controller;
use App\Http\Requests\BackRequest;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Http\Requests\StoreRequest;
use App\Models\Back_title;
use App\Models\Image;
use App\Models\Section;
use App\Models\Page;
use Illuminate\Auth\Events\Validated;

class BackgroundController
{
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BackRequest $request ,Section $section)
    {
        
        // dd($request->all());
        $validated= $request->validated();
        // $filePath = null;

        if ($request->hasFile('background_image')) {
            $file = $request->file('background_image');
            $filename = $request->background_image_name . '.' . $file->getClientOriginalExtension(); // Keeps the original extension
            $filePath = $file->storeAs('background', $filename, 'public');
}

        $back_title=Back_title::create([
            'section_name'=>$validated['background_title'],
            'section_id'=> $section->id,
        ]);

        $image=Image::create([
            'image_url'=>$filePath,
            'image_name'=>$request->background_image_name
        ]);

        $image->background()->create([
            'content'=>$validated['background_content'],
            'image_id'=> $image->id,
            'back_title_id' => $back_title->id
            
        ]);

   session()->put('saved_who_' . $section->id, true);

return redirect()->back();



    }

    /**
     * Display the specified resource.
     */
     
   public function show(Background $background)
{

 //هنا قاعده احمل العلاقات المرتبطه ب الباكجراوند
    $background->load(['back_title','image']);
    
    
// رساله خطا تشيك بعد مااحمل العلاقه و تشوف لو مافي صوره 
    if ($background->isEmpty()) {
        return response()->json([
            'message' => 'Error: No backgrounds found in the system.',
            'data' => null
        ], 404);
    }



 // لو اتحملت العلاقة تمام ارجع البيانات مع رساله 
    return response()->json([
        'message' => 'Background info received successfully',
        'data' => $background
    ]);
}


//      public function edit(Section $section, Back_title $back_title)
// {
//     return view('editSection.edit_background', compact('section', 'back_title'));
// }

    /**
     * Update the specified resource in storage.
     */
//     public function update(Request $request, Background $background)
//     {

//         $Validated= $request->validate([
//         'background_title ' =>'string' ,
//         'background_content'=>'string|max:255',
//         ' background_image_name' =>'string'


//         ]);


//          if ($request->hasFile('background_image')) {
//             $file = $request->file('background_image');
//             $filename = $request->background_image_name . '.' . $file->getClientOriginalExtension(); // Keeps the original extension
//             $filePath = $file->storeAs('background', $filename, 'public');
            
//             $background->update([
//                 'background_image'=>$filePath,
//             ]);
// }

//         $background->update([
//             'title'=>$Validated[ 'background_title ' ],
//             'content'=>$Validated[ 'background_content ' ],
//             'image_name'=>$Validated[ 'background_image_name ' ]
//         ]);

//     }

//     /**
//      * Remove the specified resource from storage.
//      */
//     public function destroy(Background $background)
//     {
//         //
//     }

public function update(BackRequest $request, Section $section, Back_title $back_title)
{
    $validated = $request->validated();

    // تحديث الصورة إذا كانت مرفوعة
    if ($request->hasFile('background_image')) {
        $file = $request->file('background_image');
        $filename = $request->background_image_name . '.' . $file->getClientOriginalExtension();
        $filePath = $file->storeAs('background', $filename, 'public');

        // تحديث بيانات الصورة أو إنشائها إذا ما كانت موجودة
        $image = $back_title->background?->image;
        if ($image) {
            $image->update([
                'image_url' => $filePath,
                'image_name' => $request->background_image_name
            ]);
        } else {
            $image = Image::create([
                'image_url' => $filePath,
                'image_name' => $request->background_image_name
            ]);
        }
    } else {
        $image = $back_title->background?->image;
    }

    // تحديث عنوان القسم
    $back_title->update([
        'section_name' => $validated['background_title']
    ]);

    // تحديث محتوى الخلفية المرتبط
    if ($back_title->background) {
        $back_title->background->update([
            'content' => $validated['background_content'],
            'image_id' => $image?->id ?? $back_title->background->image_id
        ]);
    } else {
        $image?->background()->create([
            'content' => $validated['background_content'],
            'image_id' => $image->id,
            'back_title_id' => $back_title->id
        ]);
    }

    session()->flash('update_success_' . $section->id, true);
    return redirect()->back();
}



}
