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

  <!-- Company Information Form -->
  <form action="{{ route('company.update', ['company' => $company->id]) }}" method="POST"  class="mb-4" enctype="multipart/form-data"
>
    @csrf
    @method('PUT') 

    <div class="card mb-4">
      <div class="card-body">
        <h2 class="card-title">Edit Company Information</h2>

        <div class="mb-3">
          <label for="companyEmail" class="form-label">Company Email</label>
          <input type="email" class="form-control" name="companyEmail" value="{{ $company->email }}">
        </div>

        <div class="mb-3">
          <label for="companyPhone" class="form-label">Company Phone</label>
          <input type="tel" class="form-control" name="companyPhone" value="{{ $company->phone_number }}">
        </div>

        <div class="mb-3">
          <label for="slogan" class="form-label">Slogan</label>
          <input type="text" class="form-control" name="slogan" value="{{ $company->slogan }}">
        </div>

        <div class="mb-3">
          <label for="logo_url" class="form-label">Logo</label>
          @if ($company->logo_url)
              <div class="mb-2">
                  <img src="{{ asset('storage/' . $company->logo_url) }}" alt="Current Logo" height="80">
              </div>
          @endif
          <input type="file" class="form-control" name="logo_url">
        </div>

        <div class="text-end">
          <button type="submit" class="btn btn-success" >Save</button>
        </div>
      </div>
    </div>
  </form>

  <!-- User Registration Form -->
  <form method="POST" action="{{ route('user.update', ['user' => $user->id]) }}"   class="mb-4">
    @csrf
    @method('PUT')

    <div class="card mb-4">
      <div class="card-body">
        <h2 class="card-title">Edit User Information</h2>

        <div class="mb-3">
          <label for="userName" class="form-label">Name:</label>
          <input type="text" class="form-control" id="userName" name="userName" value="{{ $user->name }}" required >
        </div>

        <div class="mb-3">
          <label for="userEmail" class="form-label">Email:</label>
          <input type="email" class="form-control" id="userEmail" name="userEmail"  value="{{ $user->email }}"  required>
        </div>

        <div class="mb-3">
          <label for="userPhone" class="form-label">Phone Number:</label>
          <input type="tel" class="form-control" id="userPhone" name="userPhone"  value="{{ $user->phone_number }}"  required>
        </div>

        <div class="mb-3">
          <label for="national_id" class="form-label">National ID:</label>
          <input type="text" class="form-control" id="national_id" name="national_id"  value="{{ $user->national_id }}" pattern="\d{10}" required>
        </div>

        <div class="text-end">
          <button type="submit" class="btn btn-success">Save</button>
        </div>
      </div>
    </div>
  </form>

  <!-- Theme Settings Form -->
  <form method="POST" class="mb-4">
    @csrf
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

        <div class="text-end">
          <button type="submit" class="btn btn-success">Save</button>
        </div>
      </div>
    </div>
  </form>

</div>

</body>
</html>
