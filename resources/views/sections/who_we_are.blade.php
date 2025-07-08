@if($section->who_we_are)
  <form method="POST" action="{{ route('background.store', ['section' => $section->id]) }}" enctype="multipart/form-data" class="mb-4">
    @csrf

    <!-- Who We Are Section -->
    <div class="admin-card">
      <div class="admin-card-header">
        <h2><i class="fas fa-users"></i> Who We Are</h2>
      </div>

      <div class="section-bg-white mb-3">
        <div class="admin-subcard mb-3">
          <div class="admin-form-group">
            <label for="background_title">Section name:</label>
            <input type="text" id="background_title" name="background_title" placeholder="مثلاً: من نحن" required>
          </div>

          <div class="admin-form-group">
            <label for="background_content">Content:</label>
            <textarea id="background_content" name="background_content" rows="3" required></textarea>
          </div>

          <div class="admin-form-group">
            <label for="background_image">Background Image:</label>
            <div class="admin-file-upload">
              <input type="file" id="background_image" name="background_image">
              <span class="admin-file-upload-label">Choose file...</span>
            </div>
          </div>

          <div class="admin-form-group">
            <label for="background_image_name">Image name:</label>
            <input type="text" id="background_image_name" name="background_image_name">
          </div>
            <div class="admin-form-actions text-center mt-4">
          <button type="submit"
            class="admin-btn admin-btn-primary save-button {{ session('saved_who_' . $section->id) ? 'disabled' : '' }}"
            {{ session('saved_who_' . $section->id) ? 'disabled' : '' }}>
           
            {{ session('saved_who_' . $section->id) ? 'Saved ✓' : 'Save' }}
          </button>
        </div>

      
        </div>
      </div>
    </div>
  </form>
@endif