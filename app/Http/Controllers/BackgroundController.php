<?php

namespace App\Http\Controllers;

use App\Models\Background;
use App\Http\Controllers\Controller;
use App\Http\Requests\BackRequest;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Http\Requests\StoreRequest;
use App\Models\Image;
use App\Models\Section;
use App\Models\Page;

class BackgroundController
{
    /**
     * Display a listing of the resource.
     */
    public function edit($name)
    {
     // عرفت متغير يجيب لي بيانا الشركه على حسب اسمها 
    //   $company = Company::where('name' , $name)->first(); 

    //  // يرجع لي صفحه التعديل  بيانات الشركه فيها 
    //   return view('edit')->with( 'companies' ,  $company );

    }

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


        $image=Image::create([
            'image_url'=>$filePath,
            'image_name'=>$request->background_image_name
        ]);

        $background= $image->background()->create([
            'title'=>$validated['background_title'],
            'content'=>$validated['background_content'],
            'image_id'=> $image->id,
            'section_id'=> $section->id,
        ]);

        return redirect()->back()->withInput();
    }

    /**
     * Display the specified resource.
     */
    public function show(Background $background)
    {
        //
    }

    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $Request, Background $background)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Background $background)
    {
        //
    }
}
