<?php

namespace App\Http\Controllers;

use App\Http\Requests\mediaRequest;
use App\Models\Company_media_account;
use Illuminate\Http\Request;
use App\Models\Media_title;
use App\Models\Section;
use App\Models\Icon;


class CompanyMediaAccountController
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
    public function store(mediaRequest $request, Section $section)
{

    $validated = $request->validated();


    //  نحصل على البيانات كمصفوفات
    $urls    = $validated['media_url'];
    $icon_names  = $validated['media_icon_name'];
    $icons       = $request->file('media_icon'); // هذا ما يجي في validated

    foreach ($urls as $index => $url) {

        // $filePath = null;

        if (isset($icons[$index]) && $icons[$index] != null) {
            $file = $icons[$index];
            $filename = $icon_names[$index] . '.' . $file->getClientOriginalExtension();
            $filePath = $file->storeAs('socialMedia', $filename, 'public');
        }

        // حفظ الايقونه 
        $icon = Icon::create([
            'icon_url'  => $filePath,
            'icon_name' => $icon_names[$index],
        ]);

        // إنشاء الحسابات المرتبطة
        $icon->company_media_account()->create([
            'username_account'    => $url,
            'icon_id'   => $icon->id,
            'section_id'=> $section->id,
        ]);
    }

    session()->put('saved_media_' . $section->id, true);

    return redirect()->back();/////////////////////////////////////////////
}




    /**
     * Display the specified resource.
     */
    public function show(Company_media_account $company_media_account)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company_media_account $company_media_account)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
   public function update(MediaRequest $request, Section $section)
{

// dd([
//     'media_url' => gettype($request->input('media_url')),
//     'media_icon_name' => gettype($request->input('media_icon_name')),
// ]);

    $validated = $request->validated();

    $urls        = $validated['media_url'];
    $icon_names  = $validated['media_icon_name'];
    $icons       = $request->file('media_icon'); // غير موجود في validated لأنه ملف
    $account_ids = $request->input('media_ids'); 

//     dd([
//     'urls' => gettype($urls),
//     'icon_names' => gettype($icon_names),
//     'account_ids' => gettype($account_ids),
// ]);

    foreach ($account_ids as $index => $account_id) {
        $account = Company_media_account::find($account_id);
        if (!$account) continue;

        $icon = $account->icon;
        $filePath = $icon->icon_url;

       
        if (isset($icons[$index]) && $icons[$index]) {
            $file = $icons[$index];
            $filename = $icon_names[$index] . '.' . $file->getClientOriginalExtension();
            $filePath = $file->storeAs('socialMedia', $filename, 'public');

            $icon->update([
                'icon_url' => $filePath,
                'icon_name' => $icon_names[$index],
            ]);
        } else {
            
            $icon->update([
                'icon_name' => $icon_names[$index],
            ]);
        }

      
        $account->update([
            'username_account' => $urls[$index],
            'section_id' => $section->id,
        ]);
    }

    session()->flash('updated_media_' . $section->id, true);
    return redirect()->back();
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company_media_account $company_media_account)
    {
        //
    }
}
