<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRequest;

use function Pest\Laravel\get;

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
    $company->load([
        'user',
        'pages.sections' => function ($query) {
            $query->with([
                'back_title.background.image',
                'service_title.services.image',
                'objective_title.objectives.icons',
                'partner_title.partners.image',
                'eotm_title.employee_of_the_months.image',
                'feedback_title.feedbacks.image',
                'location_title.locations.image'
            ]);
        }
    ]);

    return response()->json([
        'message' => 'Company info received successfully',
        'data' => $company
    ]);
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        return view('edit', [
            'company' => $company,
            'user' => $company->user,
            'color'=>$company->color
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    
         public function update(Request $request, Company $company)
    {
        

       $validated= $request->validate([
        'companyName'=>'string',
        'companyEmail' => 'email',
        'companyPhone' => 'min:10|max:10|string',
        'slogan'=> 'string',
       ]);

        if ($request->hasFile('logo_url')) {
    
            $file = $request->file('logo_url');
            $filename = $validated['companyName']. '.' . $file->getClientOriginalExtension(); // Keeps the original extension
            $filePath = $file->storeAs('logos', $filename, 'public');
            $company->update([
                'logo_url'=> $filePath,
            ]);
        }

         $company->update([
        'email'=>$validated['companyEmail'],
        'phone_number'=>$validated ['companyPhone'],
        'slogan'=>$validated['slogan'],
            ]);
            $company->save();

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
