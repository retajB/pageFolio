<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Control Panel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-4">

  <div class="container">

    <!-- Top bar -->
    <div class="d-flex justify-content-between align-items-center mb-4">
      <!-- شعار المشروع -->
      <img src="{{ asset('pagefolioLogo.png') }}" alt="Logo" class="rounded" style="height: 100px;">

      <!-- زر الكرييت -->
      <a href="{{ route('create.page') }}" class="btn btn-success btn-lg">+ Create New Landing Page</a>
    </div>

    <!-- سيرش بار -->
    <form action="{{ route('home') }}" method="GET" class="mb-4">
      <div class="input-group">
        <input type="text" name="search" class="form-control form-control-lg" placeholder="ابحث عن شركة..." value="{{ request('search') }}">
        <button type="submit" class="btn btn-outline-primary btn-lg">🔍 بحث</button>
      </div>
    </form>

    <!-- جدول الشركات -->
    @if(isset($companies) && $companies->count())
    <div class="table-responsive">
      <table class="table table-hover table-bordered align-middle bg-white">
        <thead class="table-light">
          <tr>
            <th>#</th>
            <th>اسم الشركة</th>
            <th>الإجراءات</th>
          </tr>
        </thead>
        <tbody>
          @foreach($companies as $company)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $company->name }}</td>
            <td>
              <a href="{{ route('edit.company', $company->id) }}" class="btn btn-sm btn-warning">✏️ Edit</a>
              <form action="{{ route('delete.company', $company->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('هل أنت متأكد من الحذف؟')">🗑️ Delete</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    @else
      <p class="text-center text-muted">لا توجد شركات حالياً.</p>
    @endif

  </div>

</body>
</html>
