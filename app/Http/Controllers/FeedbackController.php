<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\FeedRequest;
use App\Models\Section;
use App\Models\Icon;
use App\Models\Feedback_title;

class FeedbackController
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
    public function store(FeedRequest $request, Section $section)
{
    $validated = $request->validated();

    // تخزين الصورة فقط مرة وحدة (أيقونة عامة لكل الفيدباك)
    $filePath = null;
    if ($request->hasFile('feedback_icon')) {
        $file = $request->file('feedback_icon');
        $filename = $validated['feedback_icon_name'] . '.' . $file->getClientOriginalExtension();
        $filePath = $file->storeAs('feedbacks', $filename, 'public');
    }

    // تخزين عنوان القسم
    $feedback_title = Feedback_title::create([
        'section_name'   => $validated['feedback_title'],
        'feedback_icon'  => $filePath,
        'icon_name'      => $validated['feedback_icon_name'],
        'section_id'     => $section->id,
    ]);

    // تكرار الفيدباكات
    $users    = $validated['feedbacks_userName'];
    $contents = $validated['feedbacks_content'];
    $ratings  = $validated['feedbacks_rating'];

    foreach ($users as $index => $user) {
        Feedback::create([
            'user'              => $user,
            'content'           => $contents[$index],
            'rating'            => $ratings[$index],
            'feedback_title_id' => $feedback_title->id,
        ]);
    }

    session()->put('saved_feedbacks_' . $section->id, true);

    return redirect()->back();
}


    /**
     * Display the specified resource.
     */
    public function show(Feedback $feedback)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Feedback $feedback)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
 public function update(FeedRequest $request, Section $section, Feedback_title $feedback_title)
{
    $validated = $request->validated();

    // رفع الأيقونة إن وجدت
    $filePath = $feedback_title->feedback_icon;
    if ($request->hasFile('feedback_icon')) {
        $file = $request->file('feedback_icon');
        $filename = $validated['feedback_icon_name'] . '.' . $file->getClientOriginalExtension();
        $filePath = $file->storeAs('feedbacks', $filename, 'public');
    }

    // تحديث عنوان القسم والأيقونة
    $feedback_title->update([
        'section_name'  => $validated['feedback_title'],
        'feedback_icon' => $filePath,
        'icon_name'     => $validated['feedback_icon_name'],
    ]);

    // تحديث كل feedback
    $feedback_ids = $request->input('feedbacks_id');
    $user_names   = $validated['feedbacks_userName'];
    $contents     = $validated['feedbacks_content'];
    $ratings      = $validated['feedbacks_rating'];

    foreach ($feedback_ids as $index => $id) {
       if (!empty($feedback_ids[$index])) {
    $feedback = Feedback::find($feedback_ids[$index]);
    if ($feedback) {
        $feedback->update([
            'user'              => $user_names[$index] ?? '',
            'content'           => $contents[$index] ?? '',
            'rating'            => $ratings[$index] ?? null,
            'feedback_title_id' => $feedback_title->id,
        ]);
    }
}
        }
    

    session()->flash('update_success_' . $section->id, true);
    return redirect()->back();
}



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Feedback $feedback)
    {
        //
    }
}
