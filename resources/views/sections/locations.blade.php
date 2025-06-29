@if($section->locations)

    <form class="mb-4" method="POST" action="{{ route('location.store', ['section' => $section->id]) }}" enctype="multipart/form-data">
    @csrf
    <div class="card mb-4">
        <div class="card-body">
            <h2 class="card-title">Locations</h2>

            <label>Section name:</label>
            <input class="form-control mb-3" type="text" name="location_title" placeholder="مثلاً: فروعنا">

            <div id="locationsContainer">
                <div class="location-item mb-3">
                    <label>Location content:</label>
                    <input class="form-control mb-2" name="locations_content[]" type="text">

                    <label>City Name:</label>
                    <input class="form-control mb-2" name="locations_city[]" type="text">

                    <label>URL:</label>
                    <input class="form-control mb-2" name="locations_url[]" type="text">

                    <label>Image:</label>
                    <input type="file" class="form-control mb-2" name="locations_image[]">

                     <label>Image name:</label>
                    <input type="text" class="form-control mb-2" name="location_image_name[]">
                </div>
            </div>

            <button type="button" class="btn btn-primary mb-3" id="addLocationBtn">+ Add Location</button>

            <div class="text-center">
                <button type="submit"
                  class="btn px-5 save-button {{ session('saved_locations_' . $section->id) ? 'btn-secondary' : 'btn-success' }}"
                  {{ session('saved_locations_' . $section->id) ? 'disabled' : '' }}>
                  {{ session('saved_locations_' . $section->id) ? 'Saved ✓' : 'Save' }}
                </button>

            </div>
        </div>
    </div>
</form>

@endif