<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LocationRequest;
use App\Models\Section;
use App\Models\Location_title;
use App\Models\Image;





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

        $image = Image::create([
            'image_url' => $filePath,
            'image_name' => $filename,
        ]);

        Location::create([
            'content' => $content,
            'location_url'=>$location_url[$index],
            'city_name' => $cities[$index],
            'image_id' => $image->id,
            'location_title_id' => $title->id,
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

    $location_url = $validated['locations_url'];
    $contents = $validated['locations_content'];
    $cities = $validated['locations_city'];
    $images = $request->file('locations_image');
    $image_names = $validated['location_image_name'];

    foreach ($location_title->locations as $index => $location) {
        $data = [
            'content' => $contents[$index],
            'location_url' => $location_url[$index],
            'city_name' => $cities[$index],
        ];

        if (isset($images[$index])) {
            $file = $images[$index];
            $filename = $image_names[$index] . '.' . $file->getClientOriginalExtension();
            $filePath = $file->storeAs('locations', $filename, 'public');

            $image = $location->image;
            $image->update([
                'image_url' => $filePath,
                'image_name' => $filename,
            ]);

            $data['image_id'] = $image->id;
        }

        $location->update($data);
    }

    return redirect()->back()->with('success', 'تم التحديث بنجاح');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Location $location)
    {
        //
    }
}
