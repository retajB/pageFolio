<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRequest;

class CompanyController
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
{

    $query = $request->input('search');

    if ($query) {
        // لو فيه كلمة بحث
        $companies = Company::where('name', 'like', "%$query%")->get();
    } else {
        // رجع كل الشركات
        $companies = Company::all();
    }

    return view('admin')->with('companies', $companies);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        return view('edit')->with('company' , $company);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        return view('edit')->with('company', $company);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreRequest $request , Company $company)
    {
        //   $validated= $request->validated();

        //   $company->update($validated->all());



    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
      
    $company->delete();

    return redirect()->route('home')->with('success', 'تم حذف الشركة بنجاح!');

    }


}
