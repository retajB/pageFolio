<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Company | Admin Panel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="{{ asset('css/section.css') }}" rel="stylesheet">
</head>
<body class="admin-create-page">
  <div class="admin-create-container">
    <div class="admin-create-header">
      <h1><i class="fas fa-building"></i> Create New Company</h1>
    </div>

    @if ($errors->any())
    <div class="admin-alert admin-alert-danger">
      <button type="button" class="admin-alert-close" data-dismiss="alert">&times;</button>
      <h4><i class="fas fa-exclamation-circle"></i> Validation Errors</h4>
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
      <div class="admin-card">
        <div class="admin-card-header">
          <h2><i class="fas fa-info-circle"></i> Company Information</h2>
        </div>
        <div class="admin-card-body">
          <div class="admin-form-group">
            <label for="companyName">Company Name</label>
            <input type="text" id="companyName" name="companyName" required>
          </div>

          <div class="admin-form-row">
            <div class="admin-form-group">
              <label for="companyEmail">Email</label>
              <input type="email" id="companyEmail" name="companyEmail" required>
            </div>

            <div class="admin-form-group">
              <label for="companyPhone">Phone Number</label>
              <input type="tel" id="companyPhone" name="companyPhone" required>
            </div>
          </div>

          <div class="admin-form-group">
            <label for="domain_url">Domain URL</label>
            <input type="url" id="domain_url" name="domain_url" required>
          </div>

          <div class="admin-form-group">
            <label for="slogan">Slogan</label>
            <input type="text" id="slogan" name="slogan">
          </div>

          <div class="admin-form-group">
            <label for="logo_url">Company Logo</label>
            <div class="admin-file-upload">
              <input type="file" id="logo_url" name="logo_url">
              <span class="admin-file-upload-label">Choose file...</span>
            </div>

          <div class="admin-form-group">
              <label for="header_photo">Header Photo</label>
              <div class="admin-file-upload">
                <input type="file" id="header_photo" name="header_photo">
                <span class="admin-file-upload-label">Choose file...</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- User Registration Section -->
      <div class="admin-card">
        <div class="admin-card-header">
          <h2><i class="fas fa-user-plus"></i> User Registration</h2>
        </div>
        <div class="admin-card-body">
          <div class="admin-form-group">
            <label for="userName">Full Name</label>
            <input type="text" id="userName" name="userName" required>
          </div>

          <div class="admin-form-row">
            <div class="admin-form-group">
              <label for="userEmail">Email</label>
              <input type="email" id="userEmail" name="userEmail" required>
            </div>

            <div class="admin-form-group">
              <label for="userPhone">Phone Number</label>
              <input type="tel" id="userPhone" name="userPhone" required>
            </div>
          </div>

          <div class="admin-form-group">
            <label for="national_id">National ID</label>
            <input type="text" id="national_id" name="national_id" pattern="\d{10}" required>
            <small class="admin-form-text">10 digits required</small>
          </div>
        </div>
      </div>
  

     

  <!-- Submit Button -->
<div class="admin-form-actions">
  <button type="submit" class="admin-btn admin-btn-primary">
    Continue <i class="fas fa-arrow-right ms-2"></i>
  </button>
</div>
  </div>
</form>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>