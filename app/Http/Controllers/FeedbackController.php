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
    public function update(Request $request, Feedback $feedback)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Feedback $feedback)
    {
        //
    }
}
