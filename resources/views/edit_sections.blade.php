<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Page Sections</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <link href="{{ asset('css/section.css') }}" rel="stylesheet">
</head>

<body class="admin-create-page">
  <div class="container">
    <!-- عنوان الصفحة -->
    <div class="admin-create-header text-center mb-5">
      <h1><i class="fas fa-pen-ruler me-2"></i> Edit Page Sections</h1>
    </div>

    <!-- Theme Settings Form -->
 <form method="POST" action="{{ route('color.update', ['page' => $page->id]) }}" class="mb-4">
  @csrf
  @method('PATCH')

  <div class="admin-card">
    
    <div class="admin-card-header">
      <h2><i class="fas fa-palette me-2"></i> Edit Theme Colors</h2>
    </div>

    <div class="admin-card-body">
      <div class="row">
        <!-- Background Color 1 -->
        <div class="col-md-6">
          <div class="admin-form-group">
            <label for="theme_color1">Background Color 1</label>
            <input type="color" class="form-control form-control-color" name="theme_color1" value="{{ $page->theme_color1 ?? '#ffffff' }}">
          </div>
        </div>

        <!-- Background Color 2 -->
        <div class="col-md-6">
          <div class="admin-form-group">
            <label for="theme_color2">Background Color 2</label>
            <input type="color" class="form-control form-control-color" name="theme_color2" value="{{ $page->theme_color2 ?? '#ffffff' }}">
          </div>
        </div>
      </div>

      <div class="row">
        <!-- Text Color 1 -->
        <div class="col-md-6">
          <div class="admin-form-group">
            <label for="text_color1">Text Color 1</label>
            <input type="color" class="form-control form-control-color" name="text_color1" value="{{ $page->text_color1 ?? '#000000' }}">
          </div>
        </div>

        <!-- Text Color 2 -->
        <div class="col-md-6">
          <div class="admin-form-group">
            <label for="text_color2">Text Color 2</label>
            <input type="color" class="form-control form-control-color" name="text_color2" value="{{ $page->text_color2 ?? '#000000' }}">
          </div>
        </div>
      </div>

      <div class="admin-form-actions text-center mt-4">
        <button type="submit" class="admin-btn admin-btn-navy save-button">
          <i class="fas fa-save me-2"></i> Save Changes
        </button>
      </div>
    </div>
  </div>
</form>

    <!-- باقي السكشنات -->
    @include('editSections.edit_background')
    @include('editSections.edit_services')
    @include('editSections.edit_objective')
    @include('editSections.edit_partners')
    @include('editSections.edit_feedback')
    @include('editSections.edit_EOTM')
    @include('editSections.edit_location')
    @include('editSections.edit_Media')

    <!-- زر إنهاء -->
    <div class="admin-form-actions text-center mt-5">
      <a href="{{ route('home') }}" class="admin-btn admin-btn-primary d-inline-block text-decoration-none">
        Finish <i class="fas fa-check-circle ms-2"></i>
      </a>
    </div>
  </div>

 
  <!-- سكربتات السكشنات -->
  <script src="{{ asset('js/services.js') }}"></script>
  <script src="{{ asset('js/partners.js') }}"></script>
  <script src="{{ asset('js/objectives.js') }}"></script>
  <script src="{{ asset('js/eotm.js') }}"></script>
  <script src="{{ asset('js/feedbacks.js') }}"></script>
  <script src="{{ asset('js/locations.js') }}"></script>
  <script src="{{ asset('js/social-media.js') }}"></script>
</body>
</html>