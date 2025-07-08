<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Sections | Admin Panel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="{{ asset('css/section.css') }}" rel="stylesheet">
</head>

<body class="bg-light p-4">

  <div class="admin-create-container">
    <div class="admin-create-header">
      <h1><i class="fas fa-building me-2"></i> Edit Company Information</h1>
    </div>

    <!-- Company Information Form -->
    <form action="{{ route('company.update', ['company' => $company->id]) }}" method="POST" enctype="multipart/form-data" class="mb-4">
      @csrf
      @method('PATCH')

      <div class="admin-card">
        <div class="admin-card-header">
          <h2><i class="fas fa-info-circle me-2"></i> Company Information</h2>
        </div>

        <div class="admin-card-body">
          <!-- اسم الشركة -->
          <div class="admin-form-group">
            <label for="companyName">Company Name</label>
            <input type="text" id="companyName" name="companyName" class="form-control" value="{{ $company->name }}" required>
          </div>

          <!-- البريد والهاتف -->
          <div class="admin-form-row d-flex gap-3 flex-wrap">
            <div class="admin-form-group flex-fill">
              <label for="companyEmail">Email</label>
              <input type="email" id="companyEmail" name="companyEmail" class="form-control" value="{{ $company->email }}" required>
            </div>

            <div class="admin-form-group flex-fill">
              <label for="companyPhone">Phone Number</label>
              <input type="tel" id="companyPhone" name="companyPhone" class="form-control" value="{{ $company->phone_number }}" required>
            </div>
          </div>

          <!-- الدومين -->
          <div class="admin-form-group">
            <label for="domain_url">Domain URL</label>
            <input type="url" id="domain_url" name="domain_url" class="form-control" value="{{ $company->domain }}" required>
          </div>

          <!-- الشعار -->
          <div class="admin-form-group">
            <label for="slogan">Slogan</label>
            <input type="text" id="slogan" name="slogan" class="form-control" value="{{ $company->slogan }}">
          </div>

          <!-- رفع الشعار -->
          <div class="admin-form-group">
            <label for="logo_url">Company Logo</label>
            @if ($company->logo_url)
            <div class="mb-2">
              <img src="{{ asset('storage/' . $company->logo_url) }}" alt="Current Logo" height="80">
            </div>
            @endif
            <div class="admin-file-upload">
              <input type="file" id="logo_url" name="logo_url">
              <span class="admin-file-upload-label">Choose file...</span>
            </div>
          </div>

          <div class="admin-form-actions text-center mt-4">
            <button type="submit" class="admin-btn admin-btn-navy">
              <i class="fas fa-save me-2"></i> Save Changes
            </button>
          </div>
        </div>
      </div>
    </form>


    <!-- User Registration Form -->
    <form method="POST" action="{{ route('user.update', ['user' => $user->id]) }}" class="mb-4">
      @csrf
      @method('PATCH')

      <div class="admin-card">
        <div class="admin-card-header">
          <h2><i class="fas fa-user-edit me-2"></i> Edit User Information</h2>
        </div>

        <div class="admin-card-body">
          <!-- الاسم -->
          <div class="admin-form-group">
            <label for="userName">Name:</label>
            <input type="text" class="form-control" id="userName" name="userName" value="{{ $user->name }}" required>
          </div>

          <!-- البريد الإلكتروني -->
          <div class="admin-form-group">
            <label for="userEmail">Email:</label>
            <input type="email" class="form-control" id="userEmail" name="userEmail" value="{{ $user->email }}" required>
          </div>

          <!-- رقم الجوال -->
          <div class="admin-form-group">
            <label for="userPhone">Phone Number:</label>
            <input type="tel" class="form-control" id="userPhone" name="userPhone" value="{{ $user->phone_number }}" required>
          </div>

          <!-- الهوية الوطنية -->
          <div class="admin-form-group">
            <label for="national_id">National ID:</label>
            <input type="text" class="form-control" id="national_id" name="national_id" value="{{ $user->national_id }}" pattern="\d{10}" required>
          </div>

          <!-- زر الحفظ -->
          <div class="admin-form-actions text-center mt-4">
            <button type="submit" class="admin-btn admin-btn-navy">
              <i class="fas fa-save me-2"></i> Save Changes
            </button>
          </div>
        </div>
      </div>
    </form>




    <div class="admin-form-actions text-center mt-4">
      <a href="{{ route('pages.byCompany', ['company' => $company->id]) }}" class="admin-btn admin-btn-primary d-inline-block text-decoration-none">
        Select a page to edit <i class="fas fa-arrow-right ms-2"></i>
      </a>
    </div>

  </div>

  </div>

  </div>

</body>

</html>