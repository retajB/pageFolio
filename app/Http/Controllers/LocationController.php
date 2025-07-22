<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LocationRequest;
use App\Models\Section;
use App\Models\Location_title;
use App\Models\Image;
 use Illuminate\Support\Facades\Storage;





class LocationController
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
    public function store(LocationRequest $request, Section $section)
    {
    $validated = $request->validated();

    $title = Location_title::create([
        'section_name' => $validated['location_title'],
        'section_id' => $section->id,
    ]);
    $location_url= $validated['locations_url'];
    $contents = $validated['locations_content'];
    $cities = $validated['locations_city'];
    $images = $request->file('locations_image');
    $image_names =$validated['location_image_name'];

    foreach ($contents as $index => $content) {
        $file = $images[$index];
        $filename =  $image_names[$index] . '.' . $file->getClientOriginalExtension();
        $filePath = $file->storeAs('locations', $filename, 'public');

        $location = Location::create([
            'content' => $content,
            'location_url'=>$location_url[$index],
            'city_name' => $cities[$index],
            'location_title_id' => $title->id,
        ]);

        $image = Image::create([
            'image_url' => $filePath,
            'image_name' => $image_names[$index],
            'location_id'=> $location->id,
        ]);

     
    }

    session()->put('saved_locations_' . $section->id, true);
    return redirect()->back();
}


    /**
     * Display the specified resource.
     */
    public function show(Location $location)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Location $location)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LocationRequest $request, Section $section, Location_title $location_title)
{
    $validated = $request->validated();

    $location_title->update([
        'section_name' => $validated['location_title'],
        'section_id' => $section->id,
    ]);

    $location_urls = $validated['locations_url'];
    $contents = $validated['locations_content'];
    $cities = $validated['locations_city'];
    $images = $request->file('locations_image');
    $image_names = $validated['location_image_name'];
    $location_ids    = $request->input('location_id');
    $image_ids = $request->input('location_image_id'); 


    foreach ($contents as $index => $content) {

        $filePath = null;
        $image = null;

        if (isset($images[$index]) && $images[$index] != null) {
            $file = $images[$index];
            $filename = $image_names[$index] . '.' . $file->getClientOriginalExtension();
            $filePath = $file->storeAs('locations', $filename, 'public');

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
        if (!empty($location_ids[$index])) {
            $location = Location::find($location_ids[$index]);
            if ($location) {
                $location->update([
                    'location_url'=> $location_urls[$index],
                    'city_name'=> $cities[$index],
                    'content'          => $content,
                    'location_title_id' => $location_title->id,
                    
                    // ما نغيّر image_id لأنه نفس الصورة القديمة
                ]);
            }
        }
    }

    return redirect()->back()->with('success', 'تم التحديث بنجاح');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Location $location)
    {
     // حذف الصورة من التخزين أولاً
    if ($location->image?->image_url) {
        Storage::disk('public')->delete($location->image->image_url);
    }

    $location->delete();

    return redirect()->back();
}
}
