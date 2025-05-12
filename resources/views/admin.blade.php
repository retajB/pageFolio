<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Control Panel</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-4">

  <div class="container">
    <h1 class="mb-4 text-center">Admin Control Panel</h1>

    <!-- User Registration Form -->
    <div class="card mb-4">
      <div class="card-body">
        <h2 class="card-title">User Registration</h2>
        <form action="#" method="post">
          @csrf
          <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>

          <div class="mb-3">
            <label for="phone" class="form-label">Phone Number:</label>
            <input type="tel" class="form-control" id="phone" name="phone" required>
          </div>

          <div class="mb-3">
            <label for="national_id" class="form-label">National ID:</label>
            <input type="text" class="form-control" id="national_id" name="national_id" pattern="\d{10}" required>
          </div>

          <button type="submit" class="btn btn-primary">Register</button>
        </form>
      </div>
    </div>

    <!-- Company Info Form -->
    <div class="card mb-4">
      <div class="card-body">
        <h2 class="card-title">Company Information Form</h2>
        <form method="POST" action="#">
          @csrf

          <div class="mb-3">
            <label for="company_name" class="form-label">Company Name:</label>
            <input type="text" class="form-control" id="company_name" name="company_name" required>
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
            <input type="file" class="form-control" name="image" id="image" accept="image/*" required>
          </div>
</head>
<body>

  <h1>Admin Control Panel</h1>

  <!-- Combined Form for User Registration, Company Info, and Theme -->
  <form action="#" method="POST">

    <!-- User Registration Section -->
    <h2>User Registration</h2>
    <label for="user_name">Name:</label><br>
    <input type="text" id="user_name" name="name" required><br><br>

    <label for="user_email">Email:</label><br>
    <input type="email" id="user_email" name="email" required><br><br>

    <label for="user_phone">Phone Number:</label><br>
    <input type="tel" id="user_phone" name="phone" required><br><br>

    <label for="user_national_id">National ID:</label><br>
    <input type="text" id="user_national_id" name="national_id" pattern="\d{10}" required><br><br>

    <hr>

    <!-- Company Information Section -->
    <h2>Company Information</h2>
    <label for="company_name">Company Name:</label><br>
    <input type="text" id="company_name" name="company_name" required><br><br>

    <label for="company_domain_url">Domain URL:</label><br>
    <input type="url" id="company_domain_url" name="domain_url" required><br><br>

    <label for="company_slogan">Slogan:</label><br>
    <input type="text" id="company_slogan" name="slogan"><br><br>

    <label for="company_logo_url">Logo URL:</label><br>
    <input type="url" id="company_logo_url" name="logo_url"><br><br>
 

    <hr>

    <!-- Theme Settings Section -->
    <h2>Theme Settings</h2>
    <label for="backgroundColor1">Background Color 1 (Hex code):</label><br>
    <input type="color" id="backgroundColor1" name="backgroundColor1" value="#ffffff"><br><br>

    <label for="backgroundColor2">Background Color 2 (Hex code):</label><br>
    <input type="color" id="backgroundColor2" name="backgroundColor2" value="#000000"><br><br>

    <label for="textColor">Text Color (Hex code):</label><br>
    <input type="color" id="textColor" name="textColor" value="#000000"><br><br>

    <hr>

    <!-- Submit Button for All Sections -->
    <button type="submit">Submit All Information</button>
  </form>

</body>
</html>
