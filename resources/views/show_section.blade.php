<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Sections | Admin Panel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="{{ asset('css/section.css') }}" rel="stylesheet">
</head>

<body class="admin-create-page">
  <div class="admin-create-container">
    <div class="admin-create-header">
      <h1><i class="fas fa-clipboard"></i>Data Entry Sections
</h1>
    </div>

   
      @include('sections.who_we_are')
      @include('sections.services')
      @include('sections.objectives')
      @include('sections.partners')
      @include('sections.feedbacks')
      @include('sections.employee_of_the_months')
      @include('sections.locations')
      @include('sections.social_media')

<div class="admin-form-actions text-center mt-4">
  <a href="{{ route('home') }}" class="admin-btn admin-btn-primary d-inline-block text-decoration-none">
    Finish <i class="fas fa-check-circle ms-2"></i>
  </a>
</div>


      <script>
        document.querySelectorAll('form').forEach(form => {
          form.addEventListener('submit', function() {
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



  </div>
</body>

</html>