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
<form method="POST" action="{{ route('background.store', ['section' => $section->id]) }}" enctype="multipart/form-data">
      @csrf
      
@if($section->who_we_are)
      <div class="card mb-4">
        <div class="card-body">
          <h2 class="card-title">Who We Are</h2>

          <div class="mb-3">
            <label>Section name:</label>
            <input class="form-control" name="background_title" type="text"  placeholder="..مثلًا: من نحن ">
          </div>

          <div class="mb-3">
            <label>Content:</label>
            <textarea class="form-control" name="background_content" rows="3"></textarea>
          </div>

          <div class="mb-3">
            <label>Background Image:</label>
            <input type="file" class="form-control" id="background_image" name="background_image">
          </div>

          <div class="mb-3">
            <label>Image name:</label>
            <input type="text" class="form-control" id="background_image_name" name="background_image_name">
          </div>
          

          <div class="text-center mt-4">
        <button type="submit" class="btn btn-success px-5">Save</button>
          </div>
        </div>
      </div>
    </form>
      @endif

      <!-- Services -->
<form method="POST" action="{{ route('service.store', ['section' => $section->id]) }}"  enctype="multipart/form-data">
   @csrf
      @if($section->services)
      <div class="card mb-4">
        <div class="card-body">
          <h2 class="card-title">Services</h2>

         <div class="mb-3">
            <label>Section name:</label>
            <input class="form-control" name="services_title" type="text"  placeholder="مثلاً : خدماتنا">
          </div>

          <div class="mb-3">
            <label>Content:</label>
            <textarea class="form-control" name="services_content" rows="3"></textarea>
          </div>

          <div class="mb-3">
            <label>Services Image:</label>
            <input type="file" class="form-control" id="services_image" name="services_image">
          </div>

          <div class="mb-3">
            <label>Image name:</label>
            <input type="text" class="form-control" id="services_image_name" name="services_image_name">
          </div>
          

          <div class="text-center mt-4">
        <button type="submit" class="btn btn-success px-5">Save</button>
          </div>
        </div>
      </div>
</form>
      @endif

      <!-- Objectives -->
      @if($section->objectives)
      <div class="card mb-4">
        <div class="card-body">
          <h2 class="card-title">Objectives</h2>

          <div class="mb-3">
            <label>Content:</label>
            <textarea class="form-control" name="objectives_content" rows="3"></textarea>
          </div>

          <div class="mb-3">
            <label>Image:</label>
            <input type="file" class="form-control" id="objectives_Image" name="objectives_Image">
          </div>
        </div>
      </div>
      @endif

      <!-- Partners -->
      @if($section->partners)
      <div class="card mb-4">
        <div class="card-body">
          <h2 class="card-title">Partners</h2>

          <div class="mb-3">
            <label>Image:</label>
            <input type="file" class="form-control" id="partners_Image" name="partners_Image">
          </div>
        </div>
      </div>
      @endif

      <!-- Feedbacks -->
      @if($section->feedbacks)
      <div class="card mb-4">
        <div class="card-body">
          <h2 class="card-title">Feedbacks</h2>

          <div class="mb-3">
            <label>User Name:</label>
            <input class="form-control" name="feedbacks_userName" type="text">
          </div>

          <div class="mb-3">
            <label>Feedback Content:</label>
            <textarea class="form-control" name="feedbacks_content" rows="3"></textarea>
          </div>

          <div class="mb-3">
            <label>Rating:</label>
            <input class="form-control" name="feedbacks_rating" type="number" min="1" max="5">
          </div>
        </div>
      </div>
      @endif

      <!-- Employee of the Month -->
      @if($section->employee_of_the_months)
      <div class="card mb-4">
        <div class="card-body">
          <h2 class="card-title">Employee of the Month</h2>

          <div class="mb-3">
            <label>Employee Name:</label>
            <input class="form-control" name="employee_name" type="text">
          </div>

          <div class="mb-3">
            <label>Description:</label>
            <textarea class="form-control" name="content" rows="3"></textarea>
          </div>

          <div class="mb-3">
            <label>Image:</label>
            <input type="file" class="form-control" id="employee_Image" name="employee_Image">
          </div>
        </div>
      </div>
      @endif

      <!-- Social Media -->
      @if($section->social_media)
      <div class="card mb-4">
        <div class="card-body">
          <h2 class="card-title">Social Media</h2>

          <div class="mb-3">
            <label>LinkedIn URL:</label>
            <input type="url" class="form-control mb-2" name="linkedin_url">
          </div>

          <div class="mb-3">
            <label>GitHub URL:</label>
            <input type="url" class="form-control mb-2" name="github_url">
          </div>

          <div class="mb-3">
            <label>Facebook URL:</label>
            <input type="url" class="form-control mb-2" name="facebook_url">
          </div>

          <div class="mb-3">
            <label>Twitter URL:</label>
            <input type="url" class="form-control" name="twitter_url">
          </div>
        </div>
      </div>
      @endif

      <!-- Locations -->
      @if($section->locations)
      <div class="card mb-4">
        <div class="card-body">
          <h2 class="card-title">Locations</h2>

          <div class="mb-3">
            <label>Location Name:</label>
            <input class="form-control" name="locations_content" type="text">
          </div>

          <div class="mb-3">
            <label>Image:</label>
            <input type="file" class="form-control" id="Location_Image" name="Locations_url">
          </div>
        </div>
      </div>
      @endif

      <div class="text-center mt-4">
        <button type="submit" class="btn btn-success px-5">Save Sections</button>
      </div>
    </form>
  </div>

</body>
</html>
