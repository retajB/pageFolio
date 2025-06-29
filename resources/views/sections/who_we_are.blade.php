@if($section->who_we_are)
      <form method="POST" action="{{ route('background.store', ['section' => $section->id]) }}" enctype="multipart/form-data" class="mb-4">
        @csrf
        <div class="card">
          <div class="card-body">
            <h2 class="card-title">Who We Are</h2>

            <label>Section name:</label>
            <input class="form-control" name="background_title" type="text" placeholder="مثلاً: من نحن">

            <label>Content:</label>
            <textarea class="form-control mb-3" name="background_content" rows="3"></textarea>

            <label>Background Image:</label>
            <input type="file" class="form-control mb-3" name="background_image">

            <label>Image name:</label>
            <input type="text" class="form-control mb-3" name="background_image_name">

            <div class="text-center">
            <button type="submit"
              class="btn px-5 save-button {{ session('saved_who_' . $section->id) ? 'btn-secondary' : 'btn-success' }}"
              {{ session('saved_who_' . $section->id) ? 'disabled' : '' }}>
              {{ session('saved_who_' . $section->id) ? 'Saved ✓' : 'Save' }}
            </button>
            </div>
          </div>
        </div>
      </form>
@endif