@if($section->who_we_are && isset($section->back_title))
  <form method="POST" action="{{ route('background.update', ['section' => $section->id, 'back_title' => $section->back_title->id]) }}" enctype="multipart/form-data" class="mb-4">
    @csrf
    @method('PATCH')

    <div class="admin-card">
      <div class="admin-card-header">
        <h2><i class="fas fa-users me-2"></i> Who We Are</h2>
      </div>

      <div class="admin-card-body">
        <div class="admin-subcard p-3">
          <!-- اسم القسم -->
          <div class="admin-form-group">
            <label for="background_title">Section name:</label>
            <input type="text" class="form-control" id="background_title" name="background_title"
                   value="{{ old('background_title', $section->back_title->section_name ?? '') }}"
                   placeholder="مثلاً: من نحن">
          </div>

          <!-- المحتوى -->
          <div class="admin-form-group">
            <label for="background_content">Content:</label>
            <textarea class="form-control" id="background_content" name="background_content" rows="3">{{ old('background_content', $section->back_title->background->content ?? '') }}</textarea>
          </div>

          <!-- رفع الصورة -->
<div class="admin-form-group">
  <label for="background_image">Background Image:</label>
  @if ($section->back_title->background->image->image_url ?? false)
    <div class="mb-2">
      <img src="{{ asset('storage/' . $section->back_title->background->image->image_url) }}" alt="Current Image" height="100">
    </div>
  @endif
  <div class="admin-file-upload">
    <input type="file" id="background_image" name="background_image">
    <span class="admin-file-upload-label">Choose file...</span>
  </div>
</div>

          <!-- اسم الصورة -->
          <div class="admin-form-group">
            <label for="background_image_name">Image name:</label>
            <input type="text" class="form-control" id="background_image_name" name="background_image_name"
                   value="{{ old('background_image_name', $section->back_title->background->image->image_name ?? '') }}">
          </div>
        </div>

        <!-- زر الحفظ -->
        <div class="admin-form-actions text-center mt-4">
          <button type="submit" class="admin-btn admin-btn-navy">
            <i class="fas fa-save me-2"></i> Save Changes
          </button>
        </div>
      </div>
    </div>
  </form>
@endif