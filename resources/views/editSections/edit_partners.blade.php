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

        <!-- صور الشركاء الحاليين -->
        <div id="partner-images-wrapper">
          @foreach($section->partner_title->partners as $index => $partner)
            <div class="border p-3 mb-3 rounded">
              <div class="mb-2">
                <label for="partners_image_{{ $index }}" class="form-label">Partner Image #{{ $index + 1 }}</label>
                <input type="file" class="form-control" id="partners_image_{{ $index }}" name="partners_image[]">
              </div>

              <div class="mb-2">
                <label for="partners_image_name_{{ $index }}" class="form-label">Image name:</label>
                <input type="text" class="form-control" id="partners_image_name_{{ $index }}" name="partners_image_name[]"
                       value="{{ old("partners_image_name.$index", $partner->image->image_name ?? '') }}"
                       placeholder="اسم الصورة #{{ $index + 1 }}">
              </div>
            </div>
          @endforeach

          <!-- حقل إضافي واحد في حال لا يوجد شركاء مسجلين -->
          @if($section->partner_title->partners->isEmpty())
            <div class="border p-3 mb-3 rounded">
              <div class="mb-2">
                <label for="partners_image_0" class="form-label">Partner Image #1</label>
                <input type="file" class="form-control" id="partners_image_0" name="partners_image[]">
              </div>

              <div class="mb-2">
                <label for="partners_image_name_0" class="form-label">Image name:</label>
                <input type="text" class="form-control" id="partners_image_name_0" name="partners_image_name[]"
                       placeholder="اسم الصورة #1">
              </div>
            </div>
          @endif
        </div>

        <div class="text-end">
          <button type="submit" class="btn btn-primary px-5">Save Partners</button>
        </div>
      </div>
    </div>
  </form>
@endif