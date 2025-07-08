@if($section->services)
  <form method="POST" action="{{ route('service.store', ['section' => $section->id]) }}" enctype="multipart/form-data" class="mb-4">
    @csrf

    <!-- Services Section -->
    <div class="admin-card">
      <div class="admin-card-header">
        <h2><i class="fas fa-concierge-bell"></i> Services</h2>
      </div>

      <div class="admin-card-body">
        <!-- Section name with border -->
        <div class="admin-subcard mb-4">
          <div class="admin-form-group">
            <label for="services_title">Section name:</label>
            <input type="text" id="services_title" name="services_title" placeholder="مثلاً : خدماتنا" required>
          </div>
        </div>

        <!-- Dynamic service items -->
        <div id="servicesContainer">
          <div class="service-item admin-subcard mb-3">
            <div class="admin-form-group">
              <label>Content:</label>
              <textarea name="services_content[]" rows="3" required></textarea>
            </div>

            <div class="admin-form-group">
              <label>Services Image:</label>
              <div class="admin-file-upload">
                <input type="file" name="services_image[]">
                <span class="admin-file-upload-label">Choose file...</span>
              </div>
            </div>

            <div class="admin-form-group">
              <label>Image name:</label>
              <input type="text" name="services_image_name[]">
            </div>
          </div>
        </div>

        <div class="admin-form-actions mb-3 text-center">
          <button type="button" class="admin-btn admin-btn-secondary" id="addServiceBtn">
            + Add Service
          </button>
        </div>

        <div class="admin-form-actions text-center mt-4">
          <button type="submit"
            class="admin-btn admin-btn-primary save-button {{ session('saved_services_' . $section->id) ? 'disabled' : '' }}"
            {{ session('saved_services_' . $section->id) ? 'disabled' : '' }}>
            {{ session('saved_services_' . $section->id) ? 'Saved ✓' : 'Save' }}
          </button>
        </div>
      </div>
    </div>
  </form>
@endif