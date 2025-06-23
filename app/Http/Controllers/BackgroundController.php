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
            'name'=>$validated['background_title'],
            'section_id'=> $section->id,
        ]);

        $image=Image::create([
            'image_url'=>$filePath,
            'image_name'=>$request->background_image_name
        ]);

        $background= $image->background()->create([
            'content'=>$validated['background_content'],
            'image_id'=> $image->id,
            'back_title_id' => $back_title->id
            
        ]);

        return redirect()->back()->with(['saved' => true, 'section_id' => $section->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Background $background)
    {
        
    }


     public function edit(Background $background)
    {
        return view('createSections');
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Background $background)
    {

        $Validated= $request->validate([
        'background_title ' =>'string' ,
        'background_content'=>'string|max:255',
        ' background_image_name' =>'string'


        ]);


         if ($request->hasFile('background_image')) {
            $file = $request->file('background_image');
            $filename = $request->background_image_name . '.' . $file->getClientOriginalExtension(); // Keeps the original extension
            $filePath = $file->storeAs('background', $filename, 'public');
            
            $background->update([
                'background_image'=>$filePath,
            ]);
}

        $background->update([
            'title'=>$Validated[ 'background_title ' ],
            'content'=>$Validated[ 'background_content ' ],
            'image_name'=>$Validated[ 'background_image_name ' ]
        ]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Background $background)
    {
        //
    }
}
