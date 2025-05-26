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
    public function store(StoreRequest $request)
    {

        // $validated= $request->validated();

        // if ($request->hasFile('logo_url')) {

        //     $file = $request->file('logo_url');
        //     $filename = $validated['companyName']. '.' . $file->getClientOriginalExtension(); // Keeps the original extension
        //     $filePath = $file->storeAs('logos', $filename, 'public');   
        // }
        //  $company = Company::create([
        //     'name' => $validated['companyName'],
        //     'email'=> $validated['companyEmail'],
        //     'phone_number'=> $validated['companyPhone'],
        //     'domain'=> $validated['domain_url'],
        //     'logo_url'=> $filePath,
        //     'slogan'=> $validated['slogan'],
        // ]);

        // return redirect()->route('edit');
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        return view('edit')->with('company', $company);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        return view('edit', [
            'company' => $company,
            'user' => $company->user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(StoreRequest $StoreRequest, Company $company)
    {

        dd('reached update method');


        $validated = $StoreRequest->validated();

        $company->update([
            'email' => $validated['companyEmail'],
            'phone_number' => $validated['companyPhone'],
            'slogan' => $validated['slogan'],
            'logo_url' => $validated['logo_url'],
        ]);


        $company->save();
        //dd($company);

        return redirect()->back()->withInput();
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
