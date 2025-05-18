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




  <!-- Main Form -->
  <form method="POST" action="{{route('edit.page')}}" enctype="multipart/form-data" class="mb-4">
    @csrf

    <!-- Company Information Section -->
    <div class="card mb-4">
      <div class="card-body">
        <h2 class="card-title">Company Information</h2>

        <div class="mb-3">
          <label for="company_name" class="form-label">Company Name:</label>
          <input type="text" class="form-control" id="companyName" name="companyName" required>
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Email:</label>
          <input type="email" class="form-control" id="companyEmail" name="companyEmail" required>
        </div>

        <div class="mb-3">
          <label for="phone" class="form-label">Phone Number:</label>
          <input type="tel" class="form-control" id="companyPhone" name="companyPhone" required>
        </div>

        <div class="mb-3">
          <label for="domain_url" class="form-label">Domain URL:</label>
          <input type="url" class="form-control" id="domain_url" name="domain_url" required>
        </div>

        <div class="mb-3">
          <label for="slogan" class="form-label">Slogan:</label>
          <input type="text" class="form-control" id="slogan" name="slogan">
        </div>

        <div class="mb-3">
          <label for="logo_url" class="form-label">Logo URL:</label>
          <input type="file" class="form-control" id="logo_url" name="logo_url">
        </div>

        <div class="d-flex justify-content-between">
          <button type="submit" class="btn btn-success">Save</button>
          <button type="button" class="btn btn-primary">Edit</button>
          <button type="button" class="btn btn-danger">Delete</button>
        </div>
      </div>
    </div>

    <!-- User Registration Section -->
    <div class="card mb-4">
      <div class="card-body">
        <h2 class="card-title">User Registration</h2>

        <div class="mb-3">
          <label for="userName" class="form-label">Name:</label>
          <input type="text" class="form-control" id="userName" name="userName" required>
        </div>

        <div class="mb-3">
          <label for="userEmail" class="form-label">Email:</label>
          <input type="email" class="form-control" id="userEmail" name="userEmail" required>
        </div>

        <div class="mb-3">
          <label for="userPhone" class="form-label">Phone Number:</label>
          <input type="tel" class="form-control" id="userPhone" name="userPhone" required>
        </div>

        <div class="mb-3">
          <label for="national_id" class="form-label">National ID:</label>
          <input type="text" class="form-control" id="national_id" name="national_id" pattern="\d{10}" required>
        </div>

        <div class="d-flex justify-content-between">
          <button type="submit" class="btn btn-success">Save</button>
          <button type="button" class="btn btn-primary">Edit</button>
          <button type="button" class="btn btn-danger">Delete</button>
        </div>
      </div>
    </div>

    <!-- Theme Settings Section -->
    <div class="card mb-4">
      <div class="card-body">
        <h2 class="card-title">Theme Settings</h2>

        <div class="mb-3">
          <label for="backgroundColor1" class="form-label">Background Color 1:</label>
          <input type="color" class="form-control form-control-color" id="backgroundColor1" name="backgroundColor1" value="#ffffff">
        </div>

        <div class="mb-3">
          <label for="backgroundColor2" class="form-label">Background Color 2:</label>
          <input type="color" class="form-control form-control-color" id="backgroundColor2" name="backgroundColor2" value="#000000">
        </div>

        <div class="mb-3">
          <label for="textColor" class="form-label">Text Color:</label>
          <input type="color" class="form-control form-control-color" id="textColor" name="textColor" value="#000000">
        </div>

        <div class="d-flex justify-content-between">
          <button type="submit" class="btn btn-success">Save</button>
          <button type="button" class="btn btn-primary">Edit</button>
          <button type="button" class="btn btn-danger">Delete</button>
        </div>
      </div>
    </div>
  </form>

  <!-- Sections -->
  <form method="POST" action="/save-sections" class="mb-4">
    @csrf
    <div class="card mb-4">
      <div class="card-body">
        <h2 class="card-title">Sections</h2>
        <div>
          <label><input type="checkbox" name="sections[]" value="who_we_are"> who_we_are</label><br>
          <label><input type="checkbox" name="sections[]" value="services"> services</label><br>
          <label><input type="checkbox" name="sections[]" value="objectives"> objectives</label><br>
          <label><input type="checkbox" name="sections[]" value="partners"> partners</label><br>
          <label><input type="checkbox" name="sections[]" value="feedbacks"> feedbacks</label><br>
          <label><input type="checkbox" name="sections[]" value="employee_of_the_months"> employee_of_the_months</label><br>
          <label><input type="checkbox" name="sections[]" value="social_media"> social_media</label><br>
          <label><input type="checkbox" name="sections[]" value="locations"> locations</label><br>
        </div>
        <div class="d-flex justify-content-between mt-3">
          <button type="submit" class="btn btn-success">Save</button>
          <button type="button" class="btn btn-primary">Edit</button>
          <button type="button" class="btn btn-danger">Delete</button>
        </div>
      </div>
    </div>
  </form>

    <!-- Who We Are -->
  <form method="POST" action="/save-who-we-are" enctype="multipart/form-data" class="mb-4">
    @csrf
    <div class="card">
      <div class="card-body">
        <h2 class="card-title">Who We Are</h2>

        <div class="mb-3">
          <label>Content:</label>
          <textarea class="form-control" name="who_we_are_content" rows="3"></textarea>
        </div>

        <div class="mb-3">
          <label>Background Image:</label>
          <input type="file" class="form-control" id="Background_Image" name="Background_Image">
        </div>

        <div class="d-flex justify-content-between">
          <button type="submit" class="btn btn-success">Save</button>
          <button type="button" class="btn btn-primary">Edit</button>
          <button type="button" class="btn btn-danger">Delete</button>
        </div>
      </div>
    </div>
  </form>

  <!-- Services -->
  <form method="POST" action="/save-services" enctype="multipart/form-data" class="mb-4">
    @csrf
    <div class="card">
      <div class="card-body">
        <h2 class="card-title">Services</h2>

        <div class="mb-3">
          <label>Description:</label>
          <textarea class="form-control" name="services_content" rows="3"></textarea>
        </div>

        <div class="mb-3">
          <label>Image:</label>
          <input type="file" class="form-control" id="Services_Image" name="Services_Image">
        </div>

        <div class="d-flex justify-content-between">
          <button type="submit" class="btn btn-success">Save</button>
          <button type="button" class="btn btn-primary">Edit</button>
          <button type="button" class="btn btn-danger">Delete</button>
        </div>
      </div>
    </div>
  </form>

  <!-- Objectives -->
  <form method="POST" action="/save-objectives" enctype="multipart/form-data" class="mb-4">
    @csrf
    <div class="card">
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

        <div class="d-flex justify-content-between">
          <button type="submit" class="btn btn-success">Save</button>
          <button type="button" class="btn btn-primary">Edit</button>
          <button type="button" class="btn btn-danger">Delete</button>
        </div>
      </div>
    </div>
  </form>

  <!-- Partners -->
  <form method="POST" action="/save-partners" class="mb-4">
    @csrf
    <div class="card">
      <div class="card-body">
        <h2 class="card-title">Partners</h2>

        <div class="mb-3">
          <label>Image:</label>
          <input type="file" class="form-control" id="partners_Image" name="partners_Image">
        </div>

        <div class="d-flex justify-content-between">
          <button type="submit" class="btn btn-success">Save</button>
          <button type="button" class="btn btn-primary">Edit</button>
          <button type="button" class="btn btn-danger">Delete</button>
        </div>
      </div>
    </div>
  </form>

  <!-- Feedbacks -->
  <form method="POST" action="/save-feedbacks" class="mb-4">
    @csrf
    <div class="card">
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

        <div class="d-flex justify-content-between">
          <button type="submit" class="btn btn-success">Save</button>
          <button type="button" class="btn btn-primary">Edit</button>
          <button type="button" class="btn btn-danger">Delete</button>
        </div>
      </div>
    </div>
  </form>

  <!-- Employee of the Month -->
  <form method="POST" action="/save-individuals" class="mb-4">
    @csrf
    <div class="card">
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

        <div class="d-flex justify-content-between">
          <button type="submit" class="btn btn-success">Save</button>
          <button type="button" class="btn btn-primary">Edit</button>
          <button type="button" class="btn btn-danger">Delete</button>
        </div>
      </div>
    </div>
  </form>

  <!-- Social Media -->
  <form method="POST" action="/save-social-media" class="mb-4">
    @csrf
    <div class="card">
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

        <div class="d-flex justify-content-between">
          <button type="submit" class="btn btn-success">Save</button>
          <button type="button" class="btn btn-primary">Edit</button>
          <button type="button" class="btn btn-danger">Delete</button>
        </div>
      </div>
    </div>
  </form>

  <!-- Locations -->
  <form method="POST" action="/save-locations" class="mb-4">
    @csrf
    <div class="card">
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

        <div class="d-flex justify-content-between">
          <button type="submit" class="btn btn-success">Save</button>
          <button type="button" class="btn btn-primary">Edit</button>
          <button type="button" class="btn btn-danger">Delete</button>
        </div>
      </div>
    </div>
  </form>
</div>
</body>
</html>

