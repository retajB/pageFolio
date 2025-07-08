@if($section->objectives)
  <form method="POST" action="{{ route('objective.store', ['section' => $section->id]) }}" enctype="multipart/form-data" class="mb-4">
    @csrf

    <!-- Objectives Section -->
    <div class="admin-card">
      <div class="admin-card-header">
        <h2><i class="fas fa-bullseye"></i> Objectives</h2>
      </div>

      <div class="admin-card-body">
        <!-- Section name with border -->
        <div class="admin-subcard mb-4">
          <div class="admin-form-group">
            <label for="objectives_title">Section name:</label>
            <input type="text" id="objectives_title" name="objectives_title" placeholder="مثلاً : أهدافنا" required>
          </div>
        </div>

        <!-- Dynamic objectives -->
        <div id="objectivesContainer">
          <div class="objective-item admin-subcard mb-3">
            <div class="admin-form-group">
              <label>Content:</label>
              <textarea name="objectives_content[]" rows="3" required></textarea>
            </div>

            <div class="admin-form-group">
              <label>Icon:</label>
              <div class="admin-file-upload">
                <input type="file" name="objectives_icon[]">
                <span class="admin-file-upload-label">Choose file...</span>
              </div>
            </div>

            <div class="admin-form-group">
              <label>Icon name:</label>
              <input type="text" name="objectives_icon_name[]">
            </div>
          </div>
        </div>

        <div class="admin-form-actions mb-3 text-center">
          <button type="button" class="admin-btn admin-btn-secondary" id="addObjectiveBtn">
            + Add Objective
          </button>
        </div>

        <div class="admin-form-actions text-center mt-4">
          <button type="submit"
            class="admin-btn admin-btn-primary save-button {{ session('saved_objectives_' . $section->id) ? 'disabled' : '' }}"
            {{ session('saved_objectives_' . $section->id) ? 'disabled' : '' }}>
            {{ session('saved_objectives_' . $section->id) ? 'Saved ✓' : 'Save' }}
          </button>
        </div>
      </div>
    </div>
  </form>
@endif