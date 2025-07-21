<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Pages List - Admin Control Panel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <link href="{{ asset('css/section.css') }}" rel="stylesheet">
</head>

<body class="admin-create-page">

  <div class="container">
    <!-- Page Title -->
<div class="admin-create-header text-center mb-5">
  <h1><i class="fas fa-list me-2"></i> Pages for Company: {{ $company->name }}</h1>
</div>

<!-- Page List -->
<div class="admin-card">
  <div class="admin-card-body">
    @if ($pages->count())
      <ul class="list-group">
        @foreach($pages as $page)
        <li class="list-group-item d-flex justify-content-between align-items-center">
          <span>{{ $page->page_name }}</span>
          <div class="d-flex gap-2">
            <a href="{{ route('edit_sections', $page->id) }}" class="admin-btn admin-btn-primary btn-sm">
              <i class="fas fa-edit me-1"></i> Edit
            </a>

            <form action="{{ route('delete_page', $page->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this page?')">
              @csrf
              @method('DELETE')
              <button type="submit" class="admin-btn admin-btn-danger btn-sm">
                <i class="fas fa-trash me-1"></i> Delete
              </button>
            </form>
          </div>
        </li>
        @endforeach
      </ul>
    @else
      <p class="text-center my-4">No pages are associated with this company.</p>
    @endif
  </div>
</div>

<!-- Navigation Buttons -->
<div class="admin-form-actions text-center mt-4">
  <a href="javascript:history.back()" class="admin-btn admin-btn-navy d-inline-block text-decoration-none">
    <i class="fas fa-arrow-left me-2"></i> Back
  </a>
  <a href="{{ route('home') }}" class="admin-btn admin-btn-navy d-inline-block text-decoration-none me-2">
    <i class="fas fa-home me-2"></i> Home
  </a>
</div>
  
</div>
  </div>

</body>
</html>