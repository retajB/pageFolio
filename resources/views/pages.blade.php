<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Pages List - Admin Control Panel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-4">

<div class="container">
  <h1 class="mb-5 text-center">Admin Control Panel</h1>

  <div class="card mb-4">
    <div class="card-body">
      <h2 class="card-title mb-4">صفحات شركة: {{ $company->name }}</h2>

      @if ($pages->count())
        <ul class="list-group">
          @foreach($pages as $page)
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <span>{{ $page->page_name }}</span>
              <a href="{{ route('edit_sections', $page->id) }}" class="btn btn-outline-primary btn-sm">تعديل</a>
            </li>
          @endforeach
        </ul>
      @else
        <p class="text-center">لا توجد صفحات مرتبطة بهذه الشركة.</p>
      @endif

    </div>
  </div>

  <div class="d-flex justify-content-center mt-4">
    <a href="{{ route('home') }}" class="btn btn-secondary">العودة للرئيسية</a>
  </div>

</div>

</body>
</html>
