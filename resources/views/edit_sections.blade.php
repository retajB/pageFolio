<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Page Sections</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light p-4">
  <div class="container">
    <h1 class="mb-5 text-center">Edit Page Sections:</h1>

    <!-- Theme Settings Form -->
  <form method="POST" action="{{ route('color.update', ['color' => $color->id]) }}"  class="mb-4">
    @csrf

      @method('PATCH')
    <div class="card mb-4">
      <div class="card-body">
        <h2 class="card-title">Theme Settings</h2>

        <div class="mb-3">
          <label for="backgroundColor1" class="form-label">Background Color 1:</label>
          <input type="color" class="form-control form-control-color" id="backgroundColor1" name="backgroundColor1" value="{{ $color->theme_color1 }}">
        </div>

        <div class="mb-3">
          <label for="backgroundColor2" class="form-label">Background Color 2:</label>
          <input type="color" class="form-control form-control-color" id="backgroundColor2" name="backgroundColor2" value="{{ $color->theme_color2 }}">
        </div>

        <div class="mb-3">
          <label for="textColor" class="form-label">Text Color:</label>
          <input type="color" class="form-control form-control-color" id="textColor" name="textColor" value="{{ $color->text_color }}">
        </div>

        <div class="text-end">
          <button type="submit" class="btn btn-success">Save</button>
        </div>
      </div>
    </div>
  </form>

    <div class="container">
    @include('editSections.edit_background')
    @include('editSections.edit_services')
    
    <div class="d-flex justify-content-center mt-4">
      <a href="{{ route('home') }}" class="btn btn-primary">Finish</a>
    </div>
  </div>

  <script>
    document.querySelectorAll('form').forEach(form => {
        form.addEventListener('submit', function () {
            const button = form.querySelector('.save-button');
            if (button) {
                button.disabled = true;
                button.classList.remove('btn-success');
                button.classList.add('btn-secondary');
                button.innerHTML = 'Saved &#10003;';
            }
        });
    });
  </script>

  <script src="{{ asset('js/services.js') }}"></script>
  <script src="{{ asset('js/partners.js') }}"></script>
  <script src="{{ asset('js/objectives.js') }}"></script>
  <script src="{{ asset('js/eotm.js') }}"></script>
  <script src="{{ asset('js/feedbacks.js') }}"></script>
  <script src="{{ asset('js/locations.js') }}"></script>
  <script src="{{ asset('js/social-media.js') }}"></script>
</body>
</html>
