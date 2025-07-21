@if($section->services && isset($section->service_title))
  <form method="POST"
        action="{{ route('service.update', ['section' => $section->id, 'service_title' => $section->service_title->id]) }}"
        enctype="multipart/form-data" class="mb-4">
    @csrf
    @method('PATCH')

    <div class="admin-card">
      <div class="admin-card-header">
        <h2><i class="fas fa-concierge-bell me-2"></i> Services</h2>
      </div>

      <div class="admin-card-body">
        <!-- Section Title -->
        <div class="admin-subcard mb-4 p-3">
          <div class="admin-form-group">
            <label for="services_title">Section name:</label>
            <input type="text" class="form-control" name="services_title"
                   value="{{ old('services_title', $section->service_title->section_name ?? '') }}"
                   placeholder="مثلاً : خدماتنا">
          </div>
        </div>

        <!-- Dynamic Services -->
        <div id="servicesContainer">
          @foreach($section->service_title->services as $index => $service)
            <div class="service-item admin-subcard mb-4 p-3">
              <input type="hidden" name="service_id[]" value="{{ $service->id }}">
              <input type="hidden" name="image_id[]" value="{{ $service->image->id ?? '' }}">

              <!-- Content -->
              <div class="admin-form-group">
                <label>Content:</label>
                <textarea class="form-control" name="services_content[]" rows="3">{{ old('services_content.' . $index, $service->content) }}</textarea>
              </div>

              <!-- Image -->
              <div class="admin-form-group">
                <label>Services Image:</label>
                @if ($service->image->image_url ?? false)
                  <div class="mb-2">
                    <img src="{{ asset('storage/' . $service->image->image_url) }}" alt="Current Service Image" height="80">
                  </div>
                @endif
                <div class="admin-file-upload">
                  <input type="file" name="services_image[]">
                  <span class="admin-file-upload-label">Choose file...</span>
                </div>
              </div>

              <!-- Image name -->
              <div class="admin-form-group">
                <label>Image name:</label>
                <input type="text" class="form-control" name="services_image_name[]" value="{{ old('services_image_name.' . $index, $service->image->image_name ?? '') }}">
              </div>

              <!--  Delete Button -->
              <div class="text-end mt-3">
                <button type="button"
                        class="admin-btn admin-btn-danger btn-sm"
                        onclick="confirmDelete('{{ $service->id }}')">
                  <i class="fas fa-trash me-1"></i> Delete Service
                </button>
              </div>
            </div>
          @endforeach
        </div>

        <!-- Save Button -->
        <div class="admin-form-actions text-center mt-4">
          <button type="submit" class="admin-btn admin-btn-navy">
            <i class="fas fa-save me-2"></i> Save Changes
          </button>
        </div>
      </div>
    </div>
  </form>

  <!-- 🧾 Hidden Delete Forms -->
  @foreach($section->service_title->services as $service)
    <form id="delete-form-{{ $service->id }}"
          action="{{ route('service.delete', ['service' => $service->id]) }}"
          method="POST" style="display: none;">
      @csrf
      @method('DELETE')
    </form>
  @endforeach
@endif

<script>
function confirmDelete(serviceId) {
  if (confirm('هل أنت متأكد من أنك تريد حذف هذه الخدمة؟')) {
    const form = document.getElementById('delete-form-' + serviceId);
    if (form) form.submit();
  }
}
</script>