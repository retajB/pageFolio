@if($section->partners)
  <form method="POST" action="{{ route('partner.store', ['section' => $section->id]) }}" enctype="multipart/form-data">
    @csrf

    <!-- Partners Section -->
    <div class="admin-card">
      <div class="admin-card-header">
        <h2><i class="fas fa-handshake"></i> Partners</h2>
      </div>

      <div class="admin-card-body">
        <!-- Section name + content with border -->
        <div class="admin-subcard mb-4">
          <div class="admin-form-group">
            <label for="partners_title">Section name:</label>
            <input type="text" id="partners_title" name="partners_title" placeholder="مثلاً: الشركاء" required>
          </div>

          <div class="admin-form-group">
            <label for="partners_content">Content:</label>
            <textarea id="partners_content" name="partners_content" rows="3" required></textarea>
          </div>
        </div>

        <!-- Dynamic partner items -->
        <div id="partnersContainer">
          <div class="partner-item admin-subcard mb-3">
            <div class="admin-form-group">
              <label>Partner Image:</label>
              <div class="admin-file-upload">
                <input type="file" name="partners_image[]">
                <span class="admin-file-upload-label">Choose file...</span>
              </div>
            </div>

            <div class="admin-form-group">
              <label>Image name:</label>
              <input type="text" name="partners_image_name[]">
            </div>
          </div>
        </div>

        <div class="admin-form-actions mb-3 text-center">
          <button type="button" class="admin-btn admin-btn-secondary" id="addPartnerBtn">
            + Add Image
          </button>
        </div>

        <div class="admin-form-actions text-center mt-4">
          <button type="submit"
            class="admin-btn admin-btn-primary save-button {{ session('saved_partners_' . $section->id) ? 'disabled' : '' }}"
            {{ session('saved_partners_' . $section->id) ? 'disabled' : '' }}>
            {{ session('saved_partners_' . $section->id) ? 'Saved ✓' : 'Save' }}
          </button>
        </div>
      </div>
    </div>
  </form>
@endif