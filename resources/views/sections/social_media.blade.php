@if($section->social_media)
  <form method="POST" action="{{ route('social.store', ['section' => $section->id]) }}" enctype="multipart/form-data" class="mb-4">
    @csrf

    <!-- Social Media Section -->
    <div class="admin-card">
      <div class="admin-card-header">
        <h2><i class="fas fa-share-alt"></i> Social Media</h2>
      </div>

      <div class="admin-card-body">
        <div id="media-fields-container">
          <div class="media-field admin-subcard mb-3">
            <div class="admin-form-group">
              <label>URL:</label>
              <input type="url" name="media_url[]" required>
            </div>

            <div class="admin-form-group">
              <label>Social Media Icon:</label>
              <div class="admin-file-upload">
                <input type="file" name="media_icon[]">
                <span class="admin-file-upload-label">Choose file...</span>
              </div>
            </div>

            <div class="admin-form-group">
              <label>Icon name:</label>
              <input type="text" name="media_icon_name[]">
            </div>
          </div>
        </div>

        <div class="admin-form-actions mb-3 text-center">
  <button type="button" class="admin-btn admin-btn-secondary" id="addMediaAccountBtn">
    + Add Account
  </button>
</div>

        <div class="admin-form-actions text-center mt-4">
          <button type="submit"
            class="admin-btn admin-btn-primary save-button {{ session('saved_media_' . $section->id) ? 'disabled' : '' }}"
            {{ session('saved_media_' . $section->id) ? 'disabled' : '' }}>
            {{ session('saved_media_' . $section->id) ? 'Saved ✓' : 'Save' }}
          </button>
        </div>
      </div>
    </div>
  </form>
@endif