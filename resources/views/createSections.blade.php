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

    <!-- Who We Are -->
@if($section->who_we_are)
      <form method="POST" action="{{ route('background.store', ['section' => $section->id]) }}" enctype="multipart/form-data" class="mb-4">
        @csrf
        <div class="card">
          <div class="card-body">
            <h2 class="card-title">Who We Are</h2>

            <label>Section name:</label>
            <input class="form-control" name="background_title" type="text" placeholder="مثلاً: من نحن">

            <label>Content:</label>
            <textarea class="form-control mb-3" name="background_content" rows="3"></textarea>

            <label>Background Image:</label>
            <input type="file" class="form-control mb-3" name="background_image">

            <label>Image name:</label>
            <input type="text" class="form-control mb-3" name="background_image_name">

            <div class="text-center">
            <button type="submit"
              class="btn px-5 save-button {{ session('saved_who_' . $section->id) ? 'btn-secondary' : 'btn-success' }}"
              {{ session('saved_who_' . $section->id) ? 'disabled' : '' }}>
              {{ session('saved_who_' . $section->id) ? 'Saved ✓' : 'Save' }}
            </button>



            </div>
          </div>
        </div>
      </form>
@endif

    <!-- Services -->
@if($section->services)
      <form method="POST" action="{{ route('service.store', ['section' => $section->id]) }}" enctype="multipart/form-data" class="mb-4" >
        @csrf
        <div class="card">
          <div class="card-body">
            <h2 class="card-title">Services</h2>

            <label>Section name:</label>
            <input class="form-control mb-3" name="services_title" type="text" placeholder="مثلاً : خدماتنا">

            <div id="servicesContainer">
              <div class="service-item mb-3">
                <label>Content:</label>
                <textarea class="form-control mb-2" name="services_content[]" rows="3"></textarea>

                <label>Services Image:</label>
                <input type="file" class="form-control mb-2" name="services_image[]">

                <label>Image name:</label>
                <input type="text" class="form-control mb-2" name="services_image_name[]">
              </div>
            </div>

            <button type="button" class="btn btn-primary mb-3" id="addServiceBtn">+ Add Service</button>

            <div class="text-center mt-3">
              <button type="submit"
                class="btn px-5 save-button {{ session('saved_services_' . $section->id) ? 'btn-secondary' : 'btn-success' }}"
                {{ session('saved_services_' . $section->id) ? 'disabled' : '' }}>
                {{ session('saved_services_' . $section->id) ? 'Saved ✓' : 'Save' }}
              </button>

            </div>
          </div>
        </div>
      </form>
@endif

    <!-- Objectives -->

@if($section->objectives)

<form method="POST" action="{{ route('objective.store', ['section' => $section->id]) }}" enctype="multipart/form-data" class="mb-4">
    @csrf
    <div class="card mb-4">
        <div class="card-body">
            <h2 class="card-title">Objectives</h2>

            <div class="mb-3">
                <label>Section name:</label>
                <input class="form-control" name="objectives_title" type="text" placeholder="مثلاً : أهدافنا">
            </div>

            <div id="objectivesContainer">
                <div class="objective-item mb-3">
                    <label>Content:</label>
                    <textarea class="form-control mb-2" name="objectives_content[]" rows="3"></textarea>

                    <label>Icon:</label>
                    <input type="file" class="form-control mb-2" name="objectives_icon[]">

                    <label>Icon name:</label>
                    <input class="form-control mb-2" name="objectives_icon_name[]" type="text">
                </div>
            </div>

            <button type="button" class="btn btn-primary mb-3" id="addObjectiveBtn">+ Add Objective</button>

            <div class="text-center">
                <button type="submit"
                        class="btn px-5 save-button {{ session('saved_objectives_' . $section->id) ? 'btn-secondary' : 'btn-success' }}"
                        {{ session('saved_objectives_' . $section->id) ? 'disabled' : '' }}>
                    {{ session('saved_objectives_' . $section->id) ? 'Saved ✓' : 'Save' }}
                </button>
            </div>
        </div>
    </div>
</form>

@endif

    <!-- Partners -->

@if($section->partners)

<form method="POST" action="{{ route('partner.store', ['section' => $section->id]) }}" enctype="multipart/form-data">
    @csrf
    <div class="card mb-4">
        <div class="card-body">
            <h2 class="card-title">Partners</h2>

            <div class="mb-3">
                <label>Section name:</label>
                <input class="form-control" name="partners_title" type="text" placeholder="مثلاً: الشركاء">
            </div>

            <div class="mb-3">
                <label>Content:</label>
                <textarea class="form-control" name="partners_content" rows="3"></textarea>
            </div>

            <div id="partnersContainer">
                <div class="partner-item mb-3">
                    <label>Partner Image:</label>
                    <input type="file" class="form-control mb-2" name="partners_image[]">

                    <label>Image name:</label>
                    <input type="text" class="form-control mb-2" name="partners_image_name[]">
                </div>
            </div>

            <button type="button" class="btn btn-primary mb-3" id="addPartnerBtn">+ Add Image</button>

            <div class="text-center mt-4">
                <button type="submit"
                    class="btn px-5 save-button {{ session('saved_partners_' . $section->id) ? 'btn-secondary' : 'btn-success' }}"
                    {{ session('saved_partners_' . $section->id) ? 'disabled' : '' }}>
                    {{ session('saved_partners_' . $section->id) ? 'Saved ✓' : 'Save' }}
                </button>
            </div>
        </div>
    </div>
</form>

@endif

      <!-- Feedbacks -->

@if($section->feedbacks)

<form method="POST" action="{{ route('feedback.store', ['section' => $section->id]) }}" enctype="multipart/form-data">
    @csrf

    <div class="card mb-4">
        <div class="card-body">
            <h2 class="card-title">Feedbacks</h2>

            <!-- يظهر مرة وحدة فقط -->
            <label>Section name:</label>
            <input class="form-control mb-3" type="text" name="feedback_title" placeholder="مثلاً: آراء العملاء">

            <label>Icon:</label>
            <input class="form-control mb-4" type="file" name="feedback_icon">

            <!-- العناصر المتكررة -->
            <div id="feedbacksContainer">
                <div class="feedback-item mb-3">
                    <label>User Name:</label>
                    <input class="form-control mb-2" name="feedbacks_userName[]" type="text">

                    <label>Feedback Content:</label>
                    <textarea class="form-control mb-2" name="feedbacks_content[]" rows="3"></textarea>

                    <label>Rating (1-5):</label>
                    <input class="form-control mb-2" name="feedbacks_rating[]" type="number" min="1" max="5">
                </div>
            </div>

            <button type="button" class="btn btn-primary mb-3" id="addFeedbackBtn">+ Add Feedback</button>

            <div class="text-center">
                <button type="submit"
                        class="btn px-5 btn-success">
                    Save
                </button>
            </div>
        </div>
    </div>
</form>

    
@endif

 

    <!-- Employee of the Month -->

@if($section->employee_of_the_months)

  <form method="POST" action="{{ route('eotm.store', ['section' => $section->id]) }}" enctype="multipart/form-data" class="mb-4" id="eotmForm">
    @csrf
    <div class="card mb-4">
        <div class="card-body">
            <h2 class="card-title">Employee of the Month</h2>

            <label>Section name:</label>
            <input class="form-control mb-3" type="text" name="EOTM_title" placeholder="مثال: موظفين الشهر">

            <div id="eotmContainer">
                <div class="eotm-item mb-3">
                    <label>Employee Name:</label>
                    <input class="form-control mb-2" name="employee_name[]" type="text">

                    <label>Description:</label>
                    <textarea class="form-control mb-2" name="employee_content[]" rows="3"></textarea>

                    <label>Employee Image:</label>
                    <input type="file" class="form-control mb-2" name="employee_image[]">

                    <label>Image name:</label>
                    <input type="text" class="form-control mb-2" name="employee_image_name[]">
                </div>
            </div>

            <button type="button" class="btn btn-primary mb-3" id="addEOTMBtn">+ Add Employee</button>

            <div class="text-center mt-3">
                <button type="submit"
                    class="btn px-5 save-button {{ session('saved_eotm_' . $section->id) ? 'btn-secondary' : 'btn-success' }}"
                    {{ session('saved_eotm_' . $section->id) ? 'disabled' : '' }}>
                    {{ session('saved_eotm_' . $section->id) ? 'Saved ✓' : 'Save' }}
                </button>
            </div>
        </div>
    </div>
</form>

@endif

    @if($section->social_media)
    <!-- Social Media Title -->
    <form class="mb-4">
            @csrf

      <div class="card">
        <div class="card-body">
          <h2 class="card-title">Social Media</h2>
          <label>Section name:</label>
          <input class="form-control" type="text" name="background_title" placeholder="e.g. Social Media">
          <div class="text-center mt-3">
            <button type="submit" class="btn btn-success px-5">Save</button>
          </div>
        </div>
      </div>
    </form>

    <!-- Social Media Content -->

    <div class="card mb-4">
      <div class="card-body">
        <label>LinkedIn URL:</label>
        <input type="url" class="form-control mb-2" name="linkedin_url">

        <label>GitHub URL:</label>
        <input type="url" class="form-control mb-2" name="github_url">

        <label>Facebook URL:</label>
        <input type="url" class="form-control mb-2" name="facebook_url">

        <label>Twitter URL:</label>
        <input type="url" class="form-control" name="twitter_url">
      </div>
    </div>
    @endif

@if($section->locations)

    <!-- Locations Title -->
     <form class="mb-4" method="POST" action="{{ route('locationTitle.store', ['section' => $section->id]) }}" enctype="multipart/form-data">
            @csrf

      <div class="card">
        <div class="card-body">
          <h2 class="card-title">Locations</h2>
          <label>Section name:</label>
          <input class="form-control" type="text" name="location_title" placeholder="e.g. Locations">
          <div class="text-center mt-3">
            <button type="submit" class="btn btn-success px-5">Save</button>
          </div>
        </div>
      </div>
    </form>

    <!-- Locations Content -->
    <form class="mb-4" method="POST" enctype="multipart/form-data">
    <div class="card mb-4">
      <div class="card-body">
        <h2 class="card-title">Locations</h2>
          <label>Section name:</label>
          <input class="form-control" type="text" name="location_title" placeholder="e.g. Locations">
        <label>Location Name:</label>
        <input class="form-control mb-3" name="locations_content" type="text">

        <label>Image:</label>
        <input type="file" class="form-control" name="Locations_url">
      </div>
    </div>
  </form>
    @endif

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





</body>
</html>
