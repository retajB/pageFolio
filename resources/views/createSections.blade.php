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

 @if($section->who_we_are)
    <!-- Who We Are Title -->
    <form class="mb-4" method="POST" action="{{ route('backTitle.store', ['section' => $section->id]) }}" enctype="multipart/form-data">
            @csrf

    <div class="card">
        <div class="card-body">
          <h2 class="card-title">Who We Are</h2>
          <label>Section name:</label>
          <input class="form-control" name="background_title" type="text" placeholder="مثلاً: من نحن">
          <div class="text-center mt-3">
            <button type="submit" class="btn btn-success px-5">Save</button>
          </div>
        </div>
      </div>
    </form>

    <!-- Who We Are Content -->
   
    <form method="POST" action="{{ route('background.store', ['section' => $section->id]) }}" enctype="multipart/form-data" class="mb-4">
      @csrf
      <div class="card">
        <div class="card-body">
          <label>Content:</label>
          <textarea class="form-control mb-3" name="background_content" rows="3"></textarea>

          <label>Background Image:</label>
          <input type="file" class="form-control mb-3" name="background_image">

          <label>Image name:</label>
          <input type="text" class="form-control mb-3" name="background_image_name">

          <div class="text-center">
            <button type="submit" class="btn btn-success px-5">Save</button>
          </div>
        </div>
      </div>
    </form>
    @endif

    @if($section->services)
    <!-- Services Title -->
   <form method="POST" action="{{ route('serviceTitle.store', ['section' => $section->id]) }}" enctype="multipart/form-data" class="mb-4">
            @csrf

      <div class="card">
        <div class="card-body">
          <h2 class="card-title">Services</h2>
          <label>Section name:</label>
          <input class="form-control" type="text" name="service_title" placeholder="e.g. Services">
          <div class="text-center mt-3">
            <button type="submit" class="btn btn-success px-5">Save</button>
          </div>
        </div>
      </div>
    </form>

    <!-- Services Content -->

    <form method="POST" action="{{ route('service.store', ['section' => $section->id]) }}" enctype="multipart/form-data" class="mb-4">
      @csrf
      <div class="card">
        <div class="card-body">
          <label>Section name:</label>
          <input class="form-control mb-3" name="services_title" type="text" placeholder="مثلاً : خدماتنا">

          <label>Content:</label>
          <textarea class="form-control mb-3" name="services_content" rows="3"></textarea>

          <label>Services Image:</label>
          <input type="file" class="form-control mb-3" name="services_image">

          <label>Image name:</label>
          <input type="text" class="form-control mb-3" name="services_image_name">

          <div class="text-center">
            <button type="submit" class="btn btn-success px-5">Save</button>
          </div>
        </div>
      </div>
    </form>
    @endif
    @if($section->objectives)
    <!-- Objectives Title -->
    <form method="POST" action="{{ route('objectiveTitle.store', ['section' => $section->id]) }}" enctype="multipart/form-data" class="mb-4">
   
            @csrf

      <div class="card">
        <div class="card-body">
          <h2 class="card-title">Objectives</h2>
          <label>Section name:</label>
          <input class="form-control" type="text" name="objective_title" placeholder="e.g. Objectives">
          <div class="text-center mt-3">
            <button type="submit" class="btn btn-success px-5">Save</button>
          </div>
        </div>
      </div>
    </form>

    <!-- Objectives Content -->

    <div class="card mb-4">
      <div class="card-body">
        <label>Content:</label>
        <textarea class="form-control mb-3" name="objectives_content" rows="3"></textarea>

        <label>Image:</label>
        <input type="file" class="form-control" name="objectives_Image">
      </div>
    </div>
    @endif
    @if($section->partners)
    <!-- Partners Title -->
   <form method="POST" action="{{ route('partnersTitle.store', ['section' => $section->id]) }}" enctype="multipart/form-data" class="mb-4">
            @csrf

      <div class="card">
        <div class="card-body">
          <h2 class="card-title">Partners</h2>
          <label>Section name:</label>
          <input class="form-control" type="text" name="partners_title" placeholder="e.g. Partners">
          <div class="text-center mt-3">

           <label>additional text:</label>
          <input class="form-control" type="text" name="sub_partners_title" placeholder="e.g. Partners">
          <div class="text-center mt-3">

            <button type="submit" class="btn btn-success px-5">Save</button>
          </div>
        </div>
      </div>
    </form>

    <!-- Partners Content -->
   
    <div class="card mb-4">
      <div class="card-body">
        <label>Image:</label>
        <input type="file" class="form-control" name="partners_Image">
      </div>
    </div>
    @endif
    @if($section->feedbacks)


    <!-- Feedbacks Title -->
    <form method="POST" action="{{ route('feedbackTitle.store', ['section' => $section->id]) }}" enctype="multipart/form-data" class="mb-4">
            @csrf

      <div class="card">
        <div class="card-body">
          <h2 class="card-title">Feedbacks</h2>
          <label>Section name:</label>
          <input class="form-control" type="text" name="feedback_title" placeholder="e.g. Feedbacks">
          <div class="text-center mt-3">
            <button type="submit" class="btn btn-success px-5">Save</button>
          </div>
        </div>
      </div>
    </form>

    <!-- Feedbacks Content -->
    <div class="card mb-4">
      <div class="card-body">
        <label>User Name:</label>
        <input class="form-control mb-3" name="feedbacks_userName" type="text">

        <label>Feedback Content:</label>
        <textarea class="form-control mb-3" name="feedbacks_content" rows="3"></textarea>

        <label>Rating:</label>
        <input class="form-control" name="feedbacks_rating" type="number" min="1" max="5">
      </div>
    </div>
    @endif

    @if($section->employee_of_the_months)

    <!-- Employee of the Month Title -->
     <form class="mb-4" method="POST" action="{{ route('eotmTitle.store', ['section' => $section->id]) }}" enctype="multipart/form-data">
            @csrf

      <div class="card">
        <div class="card-body">
          <h2 class="card-title">Employee of the Month</h2>
          <label>Section name:</label>
          <input class="form-control" type="text" name="EOTM_title" placeholder="e.g. Employee of the Month">
          <div class="text-center mt-3">
            <button type="submit" class="btn btn-success px-5">Save</button>
          </div>
        </div>
      </div>
    </form>

    <!-- Employee of the Month Content -->

    <div class="card mb-4">
      <div class="card-body">
        <label>Employee Name:</label>
        <input class="form-control mb-3" name="employee_name" type="text">

        <label>Description:</label>
        <textarea class="form-control mb-3" name="content" rows="3"></textarea>

        <label>Image:</label>
        <input type="file" class="form-control" name="employee_Image">
      </div>
    </div>
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
   
    <div class="card mb-4">
      <div class="card-body">
        <label>Location Name:</label>
        <input class="form-control mb-3" name="locations_content" type="text">

        <label>Image:</label>
        <input type="file" class="form-control" name="Locations_url">
      </div>
    </div>
    @endif

  </div>
</body>
</html>
