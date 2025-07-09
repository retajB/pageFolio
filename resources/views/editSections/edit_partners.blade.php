@if($section->partners && isset($section->partner_title))
  <form method="POST" action="{{ route('partner.update', ['section' => $section->id, 'partner_title' => $section->partner_title->id]) }}" enctype="multipart/form-data">
    @csrf
    @method('PATCH')

    <div class="admin-card">
      <div class="admin-card-header">
        <h2><i class="fas fa-handshake me-2"></i> Partners </h2>
      </div>

      <div class="admin-card-body">
        <!-- عنوان القسم -->
        <div class="admin-subcard mb-4 p-3">
          <div class="admin-form-group">
            <label for="partners_title">Section name:</label>
            <input class="form-control" id="partners_title" name="partners_title" type="text"
                   value="{{ old('partners_title', $section->partner_title->section_name ?? '') }}"
                   placeholder="مثلاً: شركاؤنا">
          </div>

          <div class="admin-form-group">
            <label for="partners_content">Sub title:</label>
            <textarea class="form-control" id="partners_content" name="partners_content" rows="2"
                      placeholder="مثلاً: شركاء النجاح">{{ old('partners_content', $section->partner_title->sub_title ?? '') }}</textarea>
          </div>
        </div>

        <!-- صور الشركاء -->
        <div id="partner-images-wrapper">
          @forelse($section->partner_title->partners as $index => $partner)
            <div class="admin-subcard mb-4 p-3">
              <div class="admin-form-group">
                <label for="partners_image_{{ $index }}">Partner Image #{{ $index + 1 }}</label>

                @if ($partner->image->image_url ?? false)
                  <div class="mb-2">
                    <img src="{{ asset('storage/' . $partner->image->image_url) }}" alt="Partner Image" height="80">
                  </div>
                @endif

                <input type="file" class="form-control" id="partners_image_{{ $index }}" name="partners_image[]">
              </div>

              <div class="admin-form-group">
                <label for="partners_image_name_{{ $index }}">Image name:</label>
                <input type="text" class="form-control" id="partners_image_name_{{ $index }}" name="partners_image_name[]"
                       value="{{ old('partners_image_name.$index', $partner->image->image_name ?? '') }}"
                       placeholder="اسم الصورة #{{ $index + 1 }}">
              </div>
            </div>
          @empty
            <div class="admin-subcard mb-4 p-3">
              <div class="admin-form-group">
                <label for="partners_image_0">Partner Image #1</label>
                <input type="file" class="form-control" id="partners_image_0" name="partners_image[]">
              </div>

              <div class="admin-form-group">
                <label for="partners_image_name_0">Image name:</label>
                <input type="text" class="form-control" id="partners_image_name_0" name="partners_image_name[]"
                       placeholder="اسم الصورة #1">
              </div>
            </div>
          @endforelse
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