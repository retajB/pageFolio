@if($section->services && isset($section->service_title))

<form method="POST" action="{{ route('service.update', ['section' => $section->id, 'service_title' => $section->service_title->id]) }}" enctype="multipart/form-data" class="mb-4">
  @csrf
  @method('PATCH')

  <div class="card">
    <div class="card-body">
      <h2 class="card-title">Services</h2>

      <label>Section name:</label>
      <input class="form-control mb-3" name="services_title" type="text"
        value="{{ old('services_title', $section->service_title->section_name ?? '') }}"
        placeholder="مثلاً : خدماتنا">

      <div id="servicesContainer">
        @foreach($section->service_title->services as $index => $service)
        <div class="service-item mb-3">

          <input type="hidden" name="service_id[]" value="{{ $service->id }}">
          <input type="hidden" name="image_id[]" value="{{ $service->image->id ?? '' }}">

          <label>Content:</label>
          <textarea class="form-control mb-2" name="services_content[]" rows="3">{{ old('services_content.' . $index, $service->content) }}</textarea>
          <label>Services Image:</label>
          <input type="file" class="form-control mb-2" name="services_image[]">

          <label>Image name:</label>
          <input type="text" class="form-control mb-2" name="services_image_name[]" value="{{ old('services_image_name.' . $index, $service->image->image_name ?? '') }}">
        </div>
        @endforeach

      </div>

      <div class="text-end">
        <button type="submit" class="btn btn-success">Save</button>
      </div>
    </div>
  </div>
</form>
@endif