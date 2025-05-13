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

    <form action="#" method="POST" enctype="multipart/form-data">
      @csrf

      
      <!-- User Registration Section -->
      <div class="card mb-4">
        <div class="card-body">
          <h2 class="card-title">User Registration</h2>

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
        </div>
      </div>

      <!-- Company Information Section -->
      <div class="card mb-4">
        <div class="card-body">
          <h2 class="card-title">Company Information</h2>

          <div class="mb-3">
            <label for="company_name" class="form-label">Company Name:</label>
            <input type="text" class="form-control" id="company_name" name="company_name" required>
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


      <!-- Landing Page Sections -->
<div class="card mb-4">
  <div class="card-body">
    <h2 class="card-title">Landing Page Sections</h2>

    <!-- Checkboxes -->
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="who_we_are_checkbox">
      <label class="form-check-label" for="who_we_are_checkbox">Who We Are</label>
    </div>

    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="services_checkbox">
      <label class="form-check-label" for="services_checkbox">Services</label>
    </div>

    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="objectives_checkbox">
      <label class="form-check-label" for="objectives_checkbox">Objectives</label>
    </div>

    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="partners_checkbox">
      <label class="form-check-label" for="partners_checkbox">Partners</label>
    </div>

    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="feedbacks_checkbox">
      <label class="form-check-label" for="feedbacks_checkbox">Feedbacks</label>
    </div>

    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="individuals_checkbox">
      <label class="form-check-label" for="individuals_checkbox">Individuals</label>
    </div>

    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="social_media_checkbox">
      <label class="form-check-label" for="social_media_checkbox">Social Media</label>
    </div>

    <div class="form-check mb-3">
      <input class="form-check-input" type="checkbox" id="locations_checkbox">
      <label class="form-check-label" for="locations_checkbox">Locations</label>
    </div>

    <!-- Hidden Forms -->
    <div id="who_we_are_form" class="section-form mb-3">
      <label>Who We Are Content:</label>
      <textarea class="form-control" name="who_we_are_content" rows="3"></textarea>
      <input type="file" class="form-control" id="backgrounds_url" name="backgrounds_url">
    </div>

    <div id="services_form" class="section-form mb-3">
      <label>Services Description:</label>
      <textarea class="form-control" name="services_content" rows="3"></textarea>
       <input type="file" class="form-control" id="services_url" name="services_url">

    </div>

    <div id="objectives_form" class="section-form mb-3">
      <label>Objectives:</label>
      <textarea class="form-control" name="objectives_content" rows="3"></textarea>
      <input type="file" class="form-control" id="objectives_url" name="objectives_url">
    </div>

    <div id="partners_form" class="section-form mb-3">
      <label>Partners Info:</label>
      <textarea class="form-control" name="partners_content" rows="3"></textarea>
    </div>

    <div id="feedbacks_form" class="section-form mb-3">
      <label>Feedbacks:</label>
      <textarea class="form-control" name="feedbacks_content" rows="3"></textarea>
    </div>

    <div id="individuals_form" class="section-form mb-3">
      <label>Individuals Description:</label>
      <textarea class="form-control" name="individuals_content" rows="3"></textarea>
    </div>

    <div id="social_media_form" class="section-form mb-3">
      <label>Social Media Links:</label>
      <input type="url" class="form-control mb-1" name="facebook_url" placeholder="Facebook URL">
      <input type="url" class="form-control mb-1" name="twitter_url" placeholder="Twitter URL">
    </div>

    <div id="locations_form" class="section-form mb-3">
      <label>Locations:</label>
      <textarea class="form-control" name="locations_content" rows="3"></textarea>
    </div>
  </div>
</div>

<!-- Styles + Script -->
<style>
  .section-form {
    display: none;
  }
</style>

<script>
  const sections = [
    'who_we_are',
    'services',
    'objectives',
    'partners',
    'feedbacks',
    'individuals',
    'social_media',
    'locations'
  ];

  sections.forEach(section => {
    const checkbox = document.getElementById(`${section}_checkbox`);
    const form = document.getElementById(`${section}_form`);

    checkbox.addEventListener('change', function () {
      form.style.display = this.checked ? 'block' : 'none';
    });
  });
</script>


      <!-- Submit Button -->
      <div class="text-center">
        <button type="submit" class="btn btn-success px-5">Submit All Information</button>
      </div>

    </form>
  </div>



</body>
</html>
 