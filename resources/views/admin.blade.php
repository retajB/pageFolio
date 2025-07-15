<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>لوحة التحكم الإدارية</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="admin-panel">
  <img src="{{ asset('pagefolioLogo.png') }}" class="logo-bg">

  <div class="admin-container">
    <!-- شريط العنوان -->
    <div class="admin-header">


      <a href="{{ route('create.page') }}" class="btn btn-gold btn-lg">
        <i class="fas fa-plus-circle me-2"></i> إنشاء صفحة جديدة
      </a>
      <img src="{{ asset('pagefolioLogo.png') }}" alt="Logo" class="admin-logo">
    </div>

    <!-- شريط البحث -->
    <form action="{{ route('home') }}" method="GET" class="search-box">
      <button type="submit" class="btn btn-outline-gold">
        <i class="fas fa-search"></i> بحث
      </button>
      <input
        type="text"
        name="search"
        class="search-box-input"
        placeholder="ابحث عن شركة..."
        value="{{ request('search') }}" />
    </form>

    <!-- جدول الشركات -->
    @if(isset($companies) && $companies->count())
    <div class="admin-table-container">
      <table class="table admin-table">
        <thead>
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
              <div class="d-flex gap-2">
                <a href="{{ route('edit.company', $company->id) }}"
                  class="btn btn-sm btn-outline-gold">
                  <i class="fas fa-edit me-1"></i> تعديل
                </a>
                <a href="{{ route('page.setup.form', ['company' => $company->id]) }}"
                  class="btn btn-sm btn-outline-primary-dark">

                  <i class="fas fa-palette me-1"></i> إضافة صفحة
                </a>
                <form action="{{ route('delete.company', $company->id) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-sm btn-outline-danger-soft"
                    onclick="return confirm('هل أنت متأكد من حذف هذه الشركة؟')">
                    <i class="fas fa-trash-alt me-1"></i> حذف
                  </button>
                </form>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    @else
    <div class="no-data">
      <i class="fas fa-building fa-3x mb-3" style="color: var(--gold-primary);"></i>
      <h4>لا توجد شركات مسجلة حالياً</h4>
      <p class="text-muted">يمكنك إنشاء شركة جديدة بالضغط على زر "إنشاء صفحة جديدة"</p>
    </div>
    @endif
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>