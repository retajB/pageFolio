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
    <!-- عنوان الصفحة -->
    <div class="admin-create-header text-center mb-5">
      <h1><i class="fas fa-list me-2"></i> صفحات شركة: {{ $company->name }}</h1>
    </div>

    <!-- قائمة الصفحات -->
    <div class="admin-card">
      <div class="admin-card-body">
        @if ($pages->count())
          <ul class="list-group">
            @foreach($pages as $page)
              <li class="list-group-item d-flex justify-content-between align-items-center">
                <span>{{ $page->page_name }}</span>
                <a href="{{ route('edit_sections', $page->id) }}" class="admin-btn admin-btn-primary btn-sm">
                  <i class="fas fa-edit me-1"></i> تعديل
                </a>
              </li>
            @endforeach
          </ul>
        @else
          <p class="text-center my-4">لا توجد صفحات مرتبطة بهذه الشركة.</p>
        @endif
      </div>
    </div>

<div class="admin-form-actions text-center mt-4">

<a href="javascript:history.back()" class="admin-btn admin-btn-navy d-inline-block text-decoration-none">
    <i class="fas fa-arrow-left me-2"></i> Go Back
  </a>
  <a href="{{ route('home') }}" class="admin-btn admin-btn-navy d-inline-block text-decoration-none me-2">
    <i class="fas fa-home me-2"></i> Home
  </a>

  
</div>
  </div>

</body>
</html>