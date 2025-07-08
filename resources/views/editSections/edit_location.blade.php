@if($section->locations && isset($section->location_title))
  <form method="POST" action="{{ route('locations.update', ['section' => $section->id, 'location_title' => $section->location_title->id]) }}" enctype="multipart/form-data">
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
              <div class="admin-form-group">
                <label>Location URL #{{ $index + 1 }}:</label>
                <input type="text" class="form-control" name="locations_url[]" value="{{ old("locations_url.$index", $location->location_url) }}">
              </div>

              <div class="admin-form-group">
                <label>Location Content #{{ $index + 1 }}:</label>
                <textarea class="form-control" name="locations_content[]" rows="2">{{ old("locations_content.$index", $location->content) }}</textarea>
              </div>

              <div class="admin-form-group">
                <label>City Name #{{ $index + 1 }}:</label>
                <input type="text" class="form-control" name="locations_city[]" value="{{ old("locations_city.$index", $location->city_name) }}">
              </div>

              <div class="admin-form-group">
                <label>Image name #{{ $index + 1 }}:</label>
                <input type="text" class="form-control" name="location_image_name[]" value="{{ old("location_image_name.$index", $location->image->image_name ?? '') }}">
              </div>

              <div class="admin-form-group">
                <label>Current Image #{{ $index + 1 }}:</label>
                @if ($location->image->image_url ?? false)
                  <div class="mb-2">
                    <img src="{{ asset('storage/' . $location->image->image_url) }}" alt="Location Image" height="80">
                  </div>
                @endif
                <input type="file" class="form-control" name="locations_image[]">
              </div>
            </div>
          @empty
            <div class="admin-subcard mb-4 p-3">
              <div class="admin-form-group">
                <label>Location URL #1:</label>
                <input type="text" class="form-control" name="locations_url[]">
              </div>

              <div class="admin-form-group">
                <label>Location Content #1:</label>
                <textarea class="form-control" name="locations_content[]" rows="2"></textarea>
              </div>

              <div class="admin-form-group">
                <label>City Name #1:</label>
                <input type="text" class="form-control" name="locations_city[]">
              </div>

              <div class="admin-form-group">
                <label>Image name #1:</label>
                <input type="text" class="form-control" name="location_image_name[]">
              </div>

              <div class="admin-form-group">
                <label>Upload Image #1:</label>
                <input type="file" class="form-control" name="locations_image[]">
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
@endif