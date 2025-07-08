@if($section->partners && isset($section->partner_title))
  <form method="POST" action="{{ route('partner.update', ['section' => $section->id, 'partner_title' => $section->partner_title->id]) }}" enctype="multipart/form-data">
    @csrf
    @method('PATCH')

    <div class="card mb-4">
      <div class="card-body">
        <h2 class="card-title">Partners Section</h2>

        <!-- عنوان القسم -->
        <div class="mb-3">
          <label for="partners_title" class="form-label">Section name:</label>
          <input class="form-control" id="partners_title" name="partners_title" type="text"
                 value="{{ old('partners_title', $section->partner_title->section_name ?? '') }}"
                 placeholder="مثلاً: شركاؤنا">
        </div>

        <!-- الجملة الصغيرة -->
        <div class="mb-3">
          <label for="partners_content" class="form-label">Sub title:</label>
          <textarea class="form-control" id="partners_content" name="partners_content" rows="2"
                    placeholder="مثلاً: شركاء النجاح">{{ old('partners_content', $section->partner_title->sub_title ?? '') }}</textarea>
        </div>

        <hr>

        <!-- صور الشركاء -->
        <div id="partner-images-wrapper">
          @for($i = 0; $i < 3; $i++)
            <div class="border p-3 mb-3 rounded">
              <div class="mb-2">
                <label for="partners_image_{{ $i }}" class="form-label">Partner Image #{{ $i + 1 }}</label>
                <input type="file" class="form-control" id="partners_image_{{ $i }}" name="partners_image[]">
              </div>

              <div class="mb-2">
                <label for="partners_image_name_{{ $i }}" class="form-label">Image name:</label>
                <input type="text" class="form-control" id="partners_image_name_{{ $i }}" name="partners_image_name[]"
                       placeholder="اسم الصورة #{{ $i + 1 }}">
              </div>
            </div>
          @endfor
        </div>

        <div class="text-end">
          <button type="submit" class="btn btn-primary px-5">Save Partners</button>
        </div>
      </div>
    </div>
  </form>
@endif