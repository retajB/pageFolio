@if($section->who_we_are && isset($section->back_title))
  <form method="POST" action="{{ route('background.update', ['section' => $section->id, 'back_title' => $section->back_title->id]) }}" enctype="multipart/form-data" class="mb-4">
    @csrf
    @method('PATCH')

    <div class="card">
      <div class="card-body">
        <h2 class="card-title">Who We Are</h2>

        <div class="mb-3">
          <label for="background_title" class="form-label">Section name:</label>
          <input class="form-control" id="background_title" name="background_title" type="text"
                 value="{{ old('background_title', $section->back_title->section_name ?? '') }}"
                 placeholder="مثلاً: من نحن">
        </div>

        <div class="mb-3">
          <label for="background_content" class="form-label">Content:</label>
          <textarea class="form-control" id="background_content" name="background_content" rows="3">{{ old('background_content', $section->back_title->background->content ?? '') }}</textarea>
        </div>

        <div class="mb-3">
          <label for="background_image" class="form-label">Background Image:</label>
          <input type="file" class="form-control" id="background_image" name="background_image">
        </div>

        <div class="mb-3">
          <label for="background_image_name" class="form-label">Image name:</label>
          <input type="text" class="form-control" id="background_image_name" name="background_image_name"
                 value="{{ old('background_image_name', $section->back_title->background->image->image_name ?? '') }}">
        </div>

        <div class="text-end">
          <button type="submit" class="btn btn-success px-5">Save</button>
        </div>
      </div>
    </div>
  </form>
@endif