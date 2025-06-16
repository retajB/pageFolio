<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ServRequest;
use App\Models\Image;
use App\Models\Section;

class ServiceController
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
    public function store(ServRequest $request , Section $section)
    {
         $validated= $request->validated();

          if ($request->hasFile('services_image')) {
            $file = $request->file('services_image');
            $filename = $request->services_image_name . '.' . $file->getClientOriginalExtension(); // Keeps the original extension
            $filePath = $file->storeAs('services', $filename, 'public');
        }

         $image=Image::create([
            'image_url'=>$filePath,
            'image_name'=>$request->services_image_name
        ]);

        $service= $image->service()->create([
            'title'=>$validated['services_title'],
            'content'=>$validated['services_content'],
            'image_id'=> $image->id,
            'section_id'=> $section->id,
        ]);

        return redirect()->back()->withInput();

    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

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
