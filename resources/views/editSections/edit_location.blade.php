@if($section->locations && isset($section->location_title))
  <form method="POST"
        action="{{ route('locations.update', ['section' => $section->id, 'location_title' => $section->location_title->id]) }}"
        enctype="multipart/form-data">
    @csrf
    @method('PATCH')

    <div class="admin-card">
      <div class="admin-card-header">
        <h2><i class="fas fa-map-marker-alt me-2"></i> Locations </h2>
      </div>

      <div class="admin-card-body">
        <!-- عنوان القسم -->
        <div class="admin-subcard mb-4 p-3">
          <div class="admin-form-group">
            <label for="location_title">Section name:</label>
            <input class="form-control" id="location_title" name="location_title" type="text"
                   value="{{ old('location_title', $section->location_title->section_name ?? '') }}"
                   placeholder="مثلاً: مواقعنا">
          </div>
        </div>

        <!-- المواقع -->
        <div id="locations-wrapper">
          @forelse($section->location_title->locations as $index => $location)
            <div class="admin-subcard mb-4 p-3">
              <input type="hidden" name="location_id[]" value="{{ $location->id }}">
              <input type="hidden" name="location_image_id[]" value="{{ $location->image->id ?? '' }}">

              <div class="admin-form-group">
                <label>Location URL</label>
                <input type="text" class="form-control" name="locations_url[{{ $index }}]"
                       value="{{ old('locations_url.'.$index, $location->location_url) }}">
              </div>

              <div class="admin-form-group">
                <label>Location Content</label>
                <textarea class="form-control" name="locations_content[{{ $index }}]" rows="2">{{ old('locations_content.'.$index, $location->content) }}</textarea>
              </div>

              <div class="admin-form-group">
                <label>City Name</label>
                <input type="text" class="form-control" name="locations_city[{{ $index }}]"
                       value="{{ old('locations_city.'.$index, $location->city_name) }}">
              </div>

              <div class="admin-form-group">
                <label>Image name</label>
                <input type="text" class="form-control" name="location_image_name[{{ $index }}]"
                       value="{{ old('location_image_name.'.$index, $location->image->image_name ?? '') }}">
              </div>

              <div class="admin-form-group">
                <label>Current Image</label>
                @if ($location->image->image_url ?? false)
                  <div class="mb-2">
                    <img src="{{ asset('storage/' . $location->image->image_url) }}" alt="Location Image" height="80">
                  </div>
                @endif
                <input type="file" class="form-control" name="locations_image[{{ $index }}]">
              </div>

              <!-- زر الحذف -->
              <div class="text-end mt-3">
                <button type="button"
                        class="admin-btn admin-btn-danger btn-sm"
                        onclick="confirmDeleteLocation('{{ $location->id }}')">
                  <i class="fas fa-trash me-1"></i> Delete Location
                </button>
              </div>
            </div>
          @empty
            <div class="admin-subcard mb-4 p-3">
              <div class="admin-form-group">
                <label>Location URL</label>
                <input type="text" class="form-control" name="locations_url[0]">
              </div>

              <div class="admin-form-group">
                <label>Location Content</label>
                <textarea class="form-control" name="locations_content[0]" rows="2"></textarea>
              </div>

              <div class="admin-form-group">
                <label>City Name</label>
                <input type="text" class="form-control" name="locations_city[0]">
              </div>

              <div class="admin-form-group">
                <label>Image name</label>
                <input type="text" class="form-control" name="location_image_name[0]">
              </div>

              <div class="admin-form-group">
                <label>Upload Image</label>
                <input type="file" class="form-control" name="locations_image[0]">
              </div>
            </div>
          @endforelse
        </div>

        <!-- زر الحفظ -->
        <div class="admin-form-actions text-center mt-4">
          <button type="submit" class="admin-btn admin-btn-navy">
            <i class="fas fa-save me-2"></i> Save Locations
          </button>
        </div>
      </div>
    </div>
  </form>

  <!-- نماذج الحذف المخفية -->
  @foreach($section->location_title->locations as $location)
    <form id="delete-location-form-{{ $location->id }}"
          action="{{ route('location.delete', ['location' => $location->id]) }}"
          method="POST" style="display: none;">
      @csrf
      @method('DELETE')
    </form>
  @endforeach
@endif

<!-- سكربت الحذف -->
<script>
  function confirmDeleteLocation(id) {
    if (confirm('هل أنت متأكد من حذف هذا الموقع؟')) {
      const form = document.getElementById('delete-location-form-' + id);
      if (form) form.submit();
    }
  }
</script>