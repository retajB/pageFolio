@if($section->partners && isset($section->partner_title))
  <form method="POST"
        action="{{ route('partner.update', ['section' => $section->id, 'partner_title' => $section->partner_title->id]) }}"
        enctype="multipart/form-data">
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
<input type="hidden" name="partner_id[]" value="{{ $partner->id }}">
<input type="hidden" name="image_id[]" value="{{ $partner->image->id ?? '' }}">
            <div class="admin-subcard mb-4 p-3">
              <!-- صورة الشريك -->
              <div class="admin-form-group">
                <label for="partners_image_{{ $index }}">Partner Image</label>

                @if ($partner->image->image_url ?? false)
                  <div class="mb-2">
                    <img src="{{ asset('storage/' . $partner->image->image_url) }}" alt="Partner Image" height="80">
                  </div>
                @endif

                <input type="file" class="form-control" id="partners_image_{{ $index }}" name="partners_image[]">
              </div>

              <!-- اسم الصورة -->
              <div class="admin-form-group">
                <label for="partners_image_name_{{ $index }}">Image name:</label>
                <input type="text" class="form-control" id="partners_image_name_{{ $index }}" name="partners_image_name[]"
                       value="{{ old('partners_image_name.' . $index, $partner->image->image_name ?? '') }}"
                       placeholder="اسم الصورة #{{ $index + 1 }}">
              </div>

              <!-- زر الحذف -->
              <div class="text-end mt-3">
                <button type="button"
                        class="admin-btn admin-btn-danger btn-sm"
                        onclick="confirmDeletePartner('{{ $partner->id }}')">
                  <i class="fas fa-trash me-1"></i> Delete Partner
                </button>
              </div>
            </div>
          @empty
            <p class="text-muted">لا توجد شركاء حاليًا</p>
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

  <!-- نماذج الحذف المخفية -->
  @foreach($section->partner_title->partners as $partner)
    <form id="delete-partner-form-{{ $partner->id }}"
          action="{{ route('partner.delete', ['partner' => $partner->id]) }}"
          method="POST" style="display: none;">
      @csrf
      @method('DELETE')
    </form>
  @endforeach

  
@endif

<!-- سكربت الحذف -->
  <script>
    function confirmDeletePartner(partnerId) {
      if (confirm('هل أنت متأكد من حذف هذا الشريك؟')) {
        const form = document.getElementById('delete-partner-form-' + partnerId);
        if (form) form.submit();
      }
    }
  </script>