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
@if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

    
    <form action="{{route('create.store')}}" method="POST" enctype="multipart/form-data">
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
        </div>
      </div>

      <!-- User Registration Section -->
      <div class="card mb-4">
        <div class="card-body">
          <h2 class="card-title">User Registration</h2>

          <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" id="userName" name="userName" required>
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="userEmail" name="userEmail" required>
          </div>

          <div class="mb-3">
            <label for="phone" class="form-label">Phone Number:</label>
            <input type="tel" class="form-control" id="userPhone" name="userPhone" required>
          </div>

          <div class="mb-3">
            <label for="national_id" class="form-label">National ID:</label>
            <input type="text" class="form-control" id="national_id" name="national_id" pattern="\d{10}" required>
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
        </div>
      </div>


      <!-- Landing page Sections -->
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
        </div>
      </div>

 

      <!-- Submit Button -->
      <div class="text-center">
        <button type="submit" class="btn btn-success px-5">Submit All Information</button>
      </div>

    </form>
  </div>



</body>
</html>
 