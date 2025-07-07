@if($section->feedbacks && isset($section->feedback_title))

<form method="POST" action="{{ route('feedback.update', ['section' => $section->id, 'feedback_title' => $section->feedback_title->id]) }}"  enctype="multipart/form-data">
    @csrf
    @method('PATCH')

    <div class="card mb-4">
        <div class="card-body">
            <h2 class="card-title">Feedbacks</h2>

            <!-- يظهر مرة وحدة فقط -->
            <label>Section name:</label>
            <input class="form-control mb-3" type="text" name="feedback_title"
                value="{{ old('feedback_title', $section->feedback_title->section_name ?? '') }}"
                placeholder="مثلاً: آراء العملاء">

            <label>Icon:</label>
            <input class="form-control mb-4" type="file" name="feedback_icon">

            <label>Icon name:</label>
            <input class="form-control mb-4" type="text" name="feedback_icon_name"
                value="{{ old('feedback_icon_name', $section->feedback_title->icon_name ?? '') }}">

            <!-- العناصر المتكررة -->
            <div id="feedbacksContainer">
                @foreach($section->feedback_title->feedbacks as $index => $feedback)
                    <div class="feedback-item mb-3">
                        <input type="hidden" name="feedbacks_id[]" value="{{ $feedback->id }}">
                        
                        <label>User Name:</label>
                        <input class="form-control mb-2" name="feedbacks_userName[]" type="text"
                        value="{{ old('feedbacks_userName.' . $index, $feedback->user) }}">

                        <label>Feedback Content:</label>
                        <textarea class="form-control mb-2" name="feedbacks_content[]" rows="3">{{ old("feedbacks_content.$index", $feedback->content) }}</textarea>

                        <label>Rating (1-5):</label>
                        <input class="form-control mb-2" name="feedbacks_rating[]" type="number" min="1" max="5"
                            value="{{ old("feedbacks_rating.$index", $feedback->rating) }}">
                    </div>
                @endforeach
            </div>

            <div class="text-end">
                <button type="submit" class="btn btn-success px-5">Save</button>
            </div>
        </div>
    </div>
</form>

@endif
