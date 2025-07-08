@if($section->locations && isset($section->location_title))
  <form method="POST" action="{{ route('locations.update', ['section' => $section->id, 'location_title' => $section->location_title->id]) }}" enctype="multipart/form-data">
    @csrf
    @method('PATCH')

    <div class="card mb-4">
      <div class="card-body">
        <h2 class="card-title">Locations Section</h2>

        <!-- عنوان القسم -->
        <div class="mb-3">
          <label for="location_title" class="form-label">Section name:</label>
          <input class="form-control" id="location_title" name="location_title" type="text"
                 value="{{ old('location_title', $section->location_title->section_name ?? '') }}"
                 placeholder="مثلاً: مواقعنا">
        </div>

        <hr>

        <!-- الحقول الديناميكية لكل موقع -->
        <div id="locations-wrapper">
          @foreach($section->location_title->locations as $index => $location)
            <div class="border p-3 mb-3 rounded">
              <div class="mb-2">
                <label class="form-label">Location URL #{{ $index + 1 }}:</label>
                <input type="text" class="form-control" name="locations_url[]" value="{{ old("locations_url.$index", $location->location_url) }}">
              </div>

              <div class="mb-2">
                <label class="form-label">Location Content #{{ $index + 1 }}:</label>
                <textarea class="form-control" name="locations_content[]" rows="2">{{ old("locations_content.$index", $location->content) }}</textarea>
              </div>

              <div class="mb-2">
                <label class="form-label">City Name #{{ $index + 1 }}:</label>
                <input type="text" class="form-control" name="locations_city[]" value="{{ old("locations_city.$index", $location->city_name) }}">
              </div>

              <div class="mb-2">
                <label class="form-label">Image name #{{ $index + 1 }}:</label>
                <input type="text" class="form-control" name="location_image_name[]" value="{{ old("location_image_name.$index", $location->image->image_name ?? '') }}">
              </div>

              <div class="mb-2">
                <label class="form-label">Upload New Image #{{ $index + 1 }}:</label>
                <input type="file" class="form-control" name="locations_image[]">
              </div>
            </div>
          @endforeach

          @if($section->location_title->locations->isEmpty())
            <div class="border p-3 mb-3 rounded">
              <div class="mb-2">
                <label class="form-label">Location URL #1:</label>
                <input type="text" class="form-control" name="locations_url[]">
              </div>

              <div class="mb-2">
                <label class="form-label">Location Content #1:</label>
                <textarea class="form-control" name="locations_content[]" rows="2"></textarea>
              </div>

              <div class="mb-2">
                <label class="form-label">City Name #1:</label>
                <input type="text" class="form-control" name="locations_city[]">
              </div>

              <div class="mb-2">
                <label class="form-label">Image name #1:</label>
                <input type="text" class="form-control" name="location_image_name[]">
              </div>

              <div class="mb-2">
                <label class="form-label">Upload Image #1:</label>
                <input type="file" class="form-control" name="locations_image[]">
              </div>
            </div>
          @endif
        </div>

        <div class="text-end">
          <button type="submit" class="btn btn-primary px-5">Save Locations</button>
        </div>
      </div>
    </div>
  </form>
@endif