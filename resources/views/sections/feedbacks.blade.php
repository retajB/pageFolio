
@if($section->feedbacks)

<form method="POST" action="{{ route('feedback.store', ['section' => $section->id]) }}" enctype="multipart/form-data">
    @csrf

    <div class="card mb-4">
        <div class="card-body">
            <h2 class="card-title">Feedbacks</h2>

            <!-- يظهر مرة وحدة فقط -->
            <label>Section name:</label>
            <input class="form-control mb-3" type="text" name="feedback_title" placeholder="مثلاً: آراء العملاء">

            <label>Icon:</label>
            <input class="form-control mb-4" type="file" name="feedback_icon">

            <label>Icon name:</label>
            <input class="form-control mb-4" type="text" name="feedback_icon_name">

            <!-- العناصر المتكررة -->
            <div id="feedbacksContainer">
                <div class="feedback-item mb-3">
                    <label>User Name:</label>
                    <input class="form-control mb-2" name="feedbacks_userName[]" type="text">

                    <label>Feedback Content:</label>
                    <textarea class="form-control mb-2" name="feedbacks_content[]" rows="3"></textarea>

                    <label>Rating (1-5):</label>
                    <input class="form-control mb-2" name="feedbacks_rating[]" type="number" min="1" max="5">
                </div>
            </div>

            <button type="button" class="btn btn-primary mb-3" id="addFeedbackBtn">+ Add Feedback</button>

            <div class="text-center">
                 <button type="submit"
                        class="btn px-5 save-button {{ session('saved_feedbacks_' . $section->id) ? 'btn-secondary' : 'btn-success' }}"
                        {{ session('saved_feedbacks_' . $section->id) ? 'disabled' : '' }}>
                    {{ session('saved_feedbacks_' . $section->id) ? 'Saved ✓' : 'Save' }}
                </button>
            </div>
        </div>
    </div>
</form>

    
@endif