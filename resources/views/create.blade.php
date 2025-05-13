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

    <form action="{{route('create.store')}}" method="POST" enctype="multipart/form-data">
      @csrf

      <!-- User Registration Section -->
      <div class="card mb-4">
        <div class="card-body">
          <h2 class="card-title">User Registration</h2>

          <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" id="user.name" name="user.name" required>
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="user.email" name="user.email" required>
          </div>

          <div class="mb-3">
            <label for="phone" class="form-label">Phone Number:</label>
            <input type="tel" class="form-control" id="user.phone" name="user.phone" required>
          </div>

          <div class="mb-3">
            <label for="national_id" class="form-label">National ID:</label>
            <input type="text" class="form-control" id="national_id" name="national_id" pattern="\d{10}" required>
          </div>
        </div>
      </div>

      <!-- Company Information Section -->
      <div class="card mb-4">
        <div class="card-body">
          <h2 class="card-title">Company Information</h2>

          <div class="mb-3">
            <label for="company_name" class="form-label">Company Name:</label>
            <input type="text" class="form-control" id="company.name" name="company.name" required>
          </div>

           <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="company.email" name="company.email" required>
          </div>

          <div class="mb-3">
            <label for="phone" class="form-label">Phone Number:</label>
            <input type="tel" class="form-control" id="company.phone" name="company.phone" required>
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

 

      <!-- Submit Button -->
      <div class="text-center">
        <button type="submit" class="btn btn-success px-5">Submit All Information</button>
      </div>

    </form>
  </div>



</body>
</html>
 