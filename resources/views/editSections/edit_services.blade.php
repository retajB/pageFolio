<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Edit Services</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body class="bg-light">

<div class="container py-5">
  <div class="card shadow-sm">
    <div class="card-body">
      <h2 class="card-title mb-4">Edit Services</h2>

      <form method="POST" action="{{ route('service.update', $section->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-4">
          <label class="form-label">Section name:</label>
          <input class="form-control" name="services_title" type="text"
                 value="{{ old('services_title', $services_title) }}">
        </div>

        @foreach($services as $index => $service)
  <div class="mb-4 border rounded p-3 bg-white">
    {{-- معرف الخدمة المخفي --}}
    <input type="hidden" name="service_id[]" value="{{ $service->id }}">

    <label class="form-label">Content:</label>
    <textarea name="services_content[]" class="form-control mb-3" rows="3">{{ old("services_content.$index", $service->content) }}</textarea>

    @if($service->image)
      <div class="mb-3">
        <label class="form-label">Current Image:</label><br>
        <img src="{{ asset('storage/' . $service->image->image_url) }}" alt="Service Image" width="120" class="img-thumbnail mb-1">
        <div class="text-muted small">{{ $service->image->image_name }}</div>
      </div>
    @endif

    <label class="form-label">New Image (optional):</label>
    <input type="file" name="services_image[]" class="form-control mb-3">

    <label class="form-label">Image name:</label>
    <input type="text" name="services_image_name[]" class="form-control"
           value="{{ old("services_image_name.$index", $service->image->image_name ?? '') }}">
  </div>
@endforeach

        <button type="submit" class="btn btn-success px-4">Update</button>
<a href="{{ route('show_section.page', $section->id) }}" class="btn btn-secondary ms-3">رجوع</a>

      </form>
    </div>
  </div>
</div>

</body>
</html>
