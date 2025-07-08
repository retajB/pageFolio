@if($section->employee_of_the_months)
  <form method="POST" action="{{ route('eotm.store', ['section' => $section->id]) }}" enctype="multipart/form-data" class="mb-4" id="eotmForm">
    @csrf

    <!-- Employee of the Month Section -->
    <div class="admin-card">
      <div class="admin-card-header">
        <h2><i class="fas fa-user-tie"></i> Employee of the Month</h2>
      </div>

      <div class="admin-card-body">
        <!-- Section name with border -->
        <div class="admin-subcard mb-4">
          <div class="admin-form-group">
            <label for="EOTM_title">Section name:</label>
            <input type="text" id="EOTM_title" name="EOTM_title" placeholder="مثال: موظفين الشهر" required>
          </div>
        </div>

        <!-- Dynamic employee items -->
        <div id="eotmContainer">
          <div class="eotm-item admin-subcard mb-3">
            <div class="admin-form-group">
              <label>Employee Name:</label>
              <input type="text" name="employee_name[]" required>
            </div>

            <div class="admin-form-group">
              <label>Description:</label>
              <textarea name="employee_content[]" rows="3" required></textarea>
            </div>

            <div class="admin-form-group">
              <label>Employee Image:</label>
              <div class="admin-file-upload">
                <input type="file" name="employee_image[]">
                <span class="admin-file-upload-label">Choose file...</span>
              </div>
            </div>

            <div class="admin-form-group">
              <label>Image name:</label>
              <input type="text" name="employee_image_name[]">
            </div>
          </div>
        </div>

        <div class="admin-form-actions mb-3 text-center">
          <button type="button" class="admin-btn admin-btn-secondary" id="addEOTMBtn">
            + Add Employee
          </button>
        </div>

        <div class="admin-form-actions text-center mt-4">
          <button type="submit"
            class="admin-btn admin-btn-primary save-button {{ session('saved_eotm_' . $section->id) ? 'disabled' : '' }}"
            {{ session('saved_eotm_' . $section->id) ? 'disabled' : '' }}>
            {{ session('saved_eotm_' . $section->id) ? 'Saved ✓' : 'Save' }}
          </button>
        </div>
      </div>
    </div>
  </form>
@endif