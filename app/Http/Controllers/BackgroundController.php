<?php

namespace App\Http\Controllers;

use App\Models\Background;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Http\Requests\StoreRequest;
class BackgroundController
{
    /**
     * Display a listing of the resource.
     */
    public function edit($name)
    {
     // عرفت متغير يجيب لي بيانا الشركه على حسب اسمها 
      $company = Company::where('name' , $name)->first(); 

     // يرجع لي صفحه التعديل  بيانات الشركه فيها 
      return view('edit')->with( 'companies' ,  $company );

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
    public function store(StoreRequest $request)
    {
        
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
