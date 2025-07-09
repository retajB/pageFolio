<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage ;
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
    $pages = $company->pages()->with([
        'company', // تضمين بيانات الكومباني مع الصفحة
        'sections.back_title.background.image',
        'sections.service_title.services.image',
        'sections.objective_title.objectives.icon',
        'sections.partner_title.partners.image',
        'sections.eotm_title.employee_of_the_months.image',
        'sections.feedback_title.feedbacks',
        'sections.location_title.locations.image',
        'sections.Company_media_account.icon'
    ])->get();

    return response()->json([
        'message' => 'Pages info retrieved successfully',
        'data' => $pages
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
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    
     

public function update(Request $request, Company $company)
{
    $validated = $request->validate([
        'companyName'   => 'string',
        'companyEmail'  => 'email',
        'companyPhone'  => 'min:10|max:10|string',
        'slogan'        => 'string|nullable',
        'domain_url'    => 'url|required',
    ]);

    // إذا فيه صورة جديدة
    if ($request->hasFile('logo_url')) {

        // حذف الصورة القديمة أولاً إذا كانت موجودة
        if ($company->logo_url && Storage::disk('public')->exists($company->logo_url)) {
            Storage::disk('public')->delete($company->logo_url);
        }

        $file = $request->file('logo_url');
        $companyName = $company->name ?? 'company_' . uniqid();
        $filename = $companyName . '.' . $file->getClientOriginalExtension();
        $filePath = $file->storeAs('logos', $filename, 'public');

        // تحديث مسار الصورة الجديد
        $company->logo_url = $filePath;
    }

    // تحديث باقي الحقول
    $company->name         = $validated['companyName'];
    $company->email        = $validated['companyEmail'];
    $company->phone_number = $validated['companyPhone'];
    $company->slogan       = $validated['slogan'];
    $company->domain   = $validated['domain_url'];

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
