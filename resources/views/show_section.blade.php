<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Control Panel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light p-4">
  <div class="container">
    <h1 class="mb-5 text-center">Admin Control Panel</h1>

     <div class="container">
    @include('sections.who_we_are')
    @include('sections.services')
    @include('sections.objectives')
    @include('sections.partners')
    @include('sections.feedbacks')
    @include('sections.employee_of_the_months')
    @include('sections.locations')
    @include('sections.social_media')

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



</body>
</html>
