@if($section->locations)
  <form class="mb-4" method="POST" action="{{ route('location.store', ['section' => $section->id]) }}" enctype="multipart/form-data">
    @csrf

    <!-- Locations Section -->
    <div class="admin-card">
      <div class="admin-card-header">
        <h2><i class="fas fa-map-marker-alt"></i> Locations</h2>
      </div>

      <div class="admin-card-body">
        <!-- Section name with border -->
        <div class="admin-subcard mb-4">
          <div class="admin-form-group">
            <label for="location_title">Section name:</label>
            <input type="text" id="location_title" name="location_title" placeholder="مثلاً: فروعنا" required>
          </div>
        </div>

        <!-- Dynamic location items -->
        <div id="locationsContainer">
          <div class="location-item admin-subcard mb-3">
            <div class="admin-form-group">
              <label>Location content:</label>
              <input type="text" name="locations_content[]" required>
            </div>

            <div class="admin-form-group">
              <label>City Name:</label>
              <input type="text" name="locations_city[]" required>
            </div>

            <div class="admin-form-group">
              <label>URL:</label>
              <input type="text" name="locations_url[]" required>
            </div>

            <div class="admin-form-group">
              <label>Image:</label>
              <div class="admin-file-upload">
                <input type="file" name="locations_image[]">
                <span class="admin-file-upload-label">Choose file...</span>
              </div>
            </div>

            <div class="admin-form-group">
              <label>Image name:</label>
              <input type="text" name="location_image_name[]">
            </div>
          </div>
        </div>

        <div class="admin-form-actions mb-3 text-center">
          <button type="button" class="admin-btn admin-btn-secondary" id="addLocationBtn">
            + Add Location
          </button>
        </div>

        <div class="admin-form-actions text-center mt-4">
          <button type="submit"
            class="admin-btn admin-btn-primary save-button {{ session('saved_locations_' . $section->id) ? 'disabled' : '' }}"
            {{ session('saved_locations_' . $section->id) ? 'disabled' : '' }}>
            {{ session('saved_locations_' . $section->id) ? 'Saved ✓' : 'Save' }}
          </button>
        </div>
      </div>
    </div>
  </form>
@endif