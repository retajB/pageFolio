@if($section->feedbacks && isset($section->feedback_title))
  <form method="POST"
        action="{{ route('feedback.update', ['section' => $section->id, 'feedback_title' => $section->feedback_title->id]) }}"
        enctype="multipart/form-data">
    @csrf
    @method('PATCH')

    <div class="admin-card">
      <div class="admin-card-header">
        <h2><i class="fas fa-comment-dots me-2"></i> Feedbacks</h2>
      </div>

      <div class="admin-card-body">
        <!-- عنوان القسم والأيقونة -->
        <div class="admin-subcard mb-4 p-3">
          <div class="admin-form-group">
            <label>Section name:</label>
            <input class="form-control" type="text" name="feedback_title"
                   value="{{ old('feedback_title', $section->feedback_title->section_name ?? '') }}"
                   placeholder="مثلاً: آراء العملاء">
          </div>

          <div class="admin-form-group">
            <label>Icon:</label>
            @if ($section->feedback_title->feedback_icon ?? false)
              <div class="mb-2">
                <img src="{{ asset('storage/' . $section->feedback_title->feedback_icon) }}" alt="Feedback Icon" height="60">
              </div>
            @endif
            <div class="admin-file-upload">
              <input type="file" name="feedback_icon">
              <span class="admin-file-upload-label">Choose file...</span>
            </div>
          </div>

          <div class="admin-form-group">
            <label>Icon name:</label>
            <input class="form-control" type="text" name="feedback_icon_name"
                   value="{{ old('feedback_icon_name', $section->feedback_title->icon_name ?? '') }}">
          </div>
        </div>

        <!-- العناصر المتكررة -->
        <div id="feedbacksContainer">
          @foreach($section->feedback_title->feedbacks as $index => $feedback)
            <div class="feedback-item admin-subcard mb-4 p-3">
              <input type="hidden" name="feedbacks_id[]" value="{{ $feedback->id }}">

              <div class="admin-form-group">
                <label>User Name:</label>
                <input class="form-control" name="feedbacks_userName[{{ $index }}]" type="text"
                       value="{{ old("feedbacks_userName.$index", $feedback->user) }}">
              </div>

              <div class="admin-form-group">
                <label>Feedback Content:</label>
                <textarea class="form-control" name="feedbacks_content[{{ $index }}]" rows="3">{{ old("feedbacks_content.$index", $feedback->content) }}</textarea>
              </div>

              <div class="admin-form-group">
                <label>Rating (1–5):</label>
                <input class="form-control" name="feedbacks_rating[{{ $index }}]" type="number" min="1" max="5"
                       value="{{ old("feedbacks_rating.$index", $feedback->rating) }}">
              </div>

              <!-- زر الحذف -->
              <div class="text-end mt-3">
                <button type="button"
                        class="admin-btn admin-btn-danger btn-sm"
                        onclick="confirmDeleteFeedback('{{ $feedback->id }}')">
                  <i class="fas fa-trash me-1"></i> Delete Feedback
                </button>
              </div>
            </div>
          @endforeach
        </div>

        <!-- زر الحفظ -->
        <div class="admin-form-actions text-center mt-4">
          <button type="submit" class="admin-btn admin-btn-navy">
            <i class="fas fa-save me-2"></i> Save Changes
          </button>
        </div>
      </div>
    </div>
  </form>

  <!-- نماذج الحذف المخفية -->
  @foreach($section->feedback_title->feedbacks as $feedback)
    <form id="delete-feedback-form-{{ $feedback->id }}"
          action="{{ route('feedback.delete', ['feedback' => $feedback->id]) }}"
          method="POST" style="display: none;">
      @csrf
      @method('DELETE')
    </form>
  @endforeach
@endif

<!-- سكربت الحذف -->
<script>
  function confirmDeleteFeedback(id) {
    if (confirm('هل أنت متأكد من حذف هذا التعليق؟')) {
      const form = document.getElementById('delete-feedback-form-' + id);
      if (form) form.submit();
    }
  }
</script>