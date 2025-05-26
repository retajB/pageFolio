<?php

namespace App\Http\Controllers;

use App\Models\Background;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Http\Requests\StoreRequest;
use Illuminate\Auth\Events\Validated;

class BackgroundController
{
    /**
     * Display a listing of the resource.
     */
    public function edit($name)
    {
      
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
    public function store(Background $request)
    {
     $Validated= $request->validated();

     $Background= Background::create([

        'content' => $Validated['content']
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
