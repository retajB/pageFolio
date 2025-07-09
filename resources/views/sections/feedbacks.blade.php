@if($section->feedbacks)
  <form method="POST" action="{{ route('feedback.store', ['section' => $section->id]) }}" enctype="multipart/form-data">
    @csrf

    <!-- Feedbacks Section -->
    <div class="admin-card">
      <div class="admin-card-header">
        <h2><i class="fas fa-comments"></i> Feedbacks</h2>
      </div>

      <div class="admin-card-body">
        <!-- ثابت داخل حدود -->
        <div class="admin-subcard mb-4">
          <div class="admin-form-group">
            <label for="feedback_title">Section name:</label>
            <input type="text" id="feedback_title" name="feedback_title" placeholder="مثلاً: آراء العملاء" required>
          </div>

          <div class="admin-form-group">
            <label for="feedback_icon">Icon:</label>
            <div class="admin-file-upload">
              <input type="file" id="feedback_icon" name="feedback_icon">
              <span class="admin-file-upload-label">Choose file...</span>
            </div>
          </div>

          <div class="admin-form-group">
            <label for="feedback_icon_name">Icon name:</label>
            <input type="text" id="feedback_icon_name" name="feedback_icon_name">
          </div>
        </div>

        <!-- العناصر المتكررة -->
        <div id="feedbacksContainer">
          <div class="feedback-item admin-subcard mb-3">
            <div class="admin-form-group">
              <label>User Name:</label>
              <input type="text" name="feedbacks_userName[]" required>
            </div>

            <div class="admin-form-group">
              <label>Feedback Content:</label>
              <textarea name="feedbacks_content[]" rows="3" required></textarea>
            </div>

            <div class="admin-form-group">
              <label>Rating (1-5):</label>
              <input type="number" name="feedbacks_rating[]" min="1" max="5" required>
            </div>
          </div>
        </div>

        <div class="admin-form-actions mb-3 text-center">
          <button type="button" class="admin-btn admin-btn-secondary" id="addFeedbackBtn">
            + Add Feedback
          </button>
        </div>

        <div class="admin-form-actions text-center mt-4">
          <button type="submit"
            class="admin-btn admin-btn-primary save-button {{ session('saved_feedbacks_' . $section->id) ? 'disabled' : '' }}"
            {{ session('saved_feedbacks_' . $section->id) ? 'disabled' : '' }}>
            {{ session('saved_feedbacks_' . $section->id) ? 'Saved ✓' : 'Save' }}
          </button>
        </div>
      </div>
    </div>
  </form>
@endif