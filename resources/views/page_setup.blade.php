<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Company | Admin Panel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="{{ asset('css/section.css') }}" rel="stylesheet">
</head>
<body class="admin-create-page">
  <div class="admin-create-container">
    <div class="admin-create-header">
      <h1><i class="fas fa-building"></i> Create New page</h1>
    </div>

 <form action="{{ route('page.setup', ['company' => $company->id]) }}" method="POST" enctype="multipart/form-data">
      @csrf
<div class="admin-card">
  <div class="admin-card-header">
    <h2><i class="fas fa-palette"></i> Theme Settings</h2>
  </div>
  <div class="admin-card-body">
    <div class="admin-form-row">
      <div class="admin-form-group">
        <label for="backgroundColor1">Primary Color</label>
        <input type="color" id="backgroundColor1" name="backgroundColor1" value="#2C3E50">
      </div>

      <div class="admin-form-group">
        <label for="backgroundColor2">Secondary Color</label>
        <input type="color" id="backgroundColor2" name="backgroundColor2" value="#FFD700">
      </div>
    </div>

    <div class="admin-form-row">
      <div class="admin-form-group">
        <label for="textColor1">Primary Text Color</label>
        <input type="color" id="textColor1" name="textColor1" value="#333333">
      </div>

      <div class="admin-form-group">
        <label for="textColor2">Secondary Text Color</label>
        <input type="color" id="textColor2" name="textColor2" value="#333333">
      </div>
    </div>
  </div>
</div>

      <!-- Layout Settings -->
      <div class="admin-card">
        <div class="admin-card-header">
          <h2><i class="fas fa-layer-group"></i> Layout Settings</h2>
        </div>
        <div class="admin-card-body">
          <div class="admin-form-group">
            <label>Select Layout Type</label>
            <div class="admin-radio-group">
              <label class="admin-radio">
                <input type="radio" name="layout" value="1" checked>
                <span class="admin-radio-checkmark"></span>
                <span class="admin-radio-label">Layout 1 </span>
              </label>
              <label class="admin-radio">
                <input type="radio" name="layout" value="2">
                <span class="admin-radio-checkmark"></span>
                <span class="admin-radio-label">Layout 2</span>
              </label>
            </div>
          </div>

          <div class="admin-form-group">
            <label for="layout_name">Layout Name</label>
            <input type="text" id="layout_name" name="layout_name" placeholder="e.g., Corporate Layout" required>
          </div>
        </div>
      </div>

      <!-- Sections -->
      <div class="admin-card">
        <div class="admin-card-header">
          <h2><i class="fas fa-th-large"></i> Page Sections</h2>
        </div>
        <div class="admin-card-body">
          <div class="admin-checkbox-grid">
            <label class="admin-checkbox">
              <input type="checkbox" name="sections[]" value="who_we_are" checked>
              <span class="admin-checkbox-checkmark"></span>
              Who We Are
            </label>
            <label class="admin-checkbox">
              <input type="checkbox" name="sections[]" value="services" checked>
              <span class="admin-checkbox-checkmark"></span>
              Services
            </label>
            <label class="admin-checkbox">
              <input type="checkbox" name="sections[]" value="objectives">
              <span class="admin-checkbox-checkmark"></span>
              Objectives
            </label>
            <label class="admin-checkbox">
              <input type="checkbox" name="sections[]" value="partners">
              <span class="admin-checkbox-checkmark"></span>
              Partners
            </label>
            <label class="admin-checkbox">
              <input type="checkbox" name="sections[]" value="feedbacks">
              <span class="admin-checkbox-checkmark"></span>
              Feedbacks
            </label>
            <label class="admin-checkbox">
              <input type="checkbox" name="sections[]" value="employee_of_the_months">
              <span class="admin-checkbox-checkmark"></span>
              Employee of the Month
            </label>
            <label class="admin-checkbox">
              <input type="checkbox" name="sections[]" value="social_media">
              <span class="admin-checkbox-checkmark"></span>
              Social Media
            </label>
            <label class="admin-checkbox">
              <input type="checkbox" name="sections[]" value="locations">
              <span class="admin-checkbox-checkmark"></span>
              Locations
            </label>
          </div>
        

          </div> <!-- إغلاق div.admin-card-body الخاص بالسكشنات -->
        </div>

        <!-- ✅ زر الإرسال داخل الفورم وتحت السكشنات -->
        <div class="admin-form-actions mt-4 text-center">
          <button type="submit" class="admin-btn admin-btn-primary">
            Continue <i class="fas fa-arrow-right ms-2"></i>
          </button>
        </div>

      </form> <!-- إغلاق الفورم بعد الزر -->


</form>
</body>


