@if($section->objectives && isset($section->objective_title))
  <form method="POST"
        action="{{ route('objective.update', ['section' => $section->id ,'objective_title' => $section->objective_title->id ]) }}"
        enctype="multipart/form-data" class="mb-4">
    @csrf
    @method('PATCH')

    <div class="admin-card">
      <div class="admin-card-header">
        <h2><i class="fas fa-bullseye me-2"></i> Objectives</h2>
      </div>

      <div class="admin-card-body">
        <!-- عنوان القسم -->
        <div class="admin-subcard mb-4 p-3">
          <div class="admin-form-group">
            <label>Section name:</label>
            <input class="form-control" name="objectives_title" type="text"
              value="{{ old('objectives_title', $section->objective_title->section_name ?? '') }}"
              placeholder="مثلاً : أهدافنا">
          </div>
        </div>

        <!-- الأهداف -->
        <div id="objectivesContainer">
          @foreach($section->objective_title->objectives as $index => $objective)
            <div class="objective-item admin-subcard mb-4 p-3">
              <input type="hidden" name="objective_id[]" value="{{ $objective->id }}">
              <input type="hidden" name="icon_id[]" value="{{ $objective->icon->id ?? '' }}">

              <div class="admin-form-group">
                <label>Content:</label>
                <textarea class="form-control" name="objectives_content[{{ $index }}]" rows="3">{{ old("objectives_content.$index", $objective->content) }}</textarea>
              </div>

              <div class="admin-form-group">
                <label>Icon:</label>

                @if ($objective->icon->icon_url ?? false)
                  <div class="mb-2">
                    <img src="{{ asset('storage/' . $objective->icon->icon_url) }}" alt="Objective Icon" height="60">
                  </div>
                @endif

                <div class="admin-file-upload">
                  <input type="file" name="objectives_icon[{{ $index }}]">
                  <span class="admin-file-upload-label">Choose file...</span>
                </div>
              </div>

              <div class="admin-form-group">
                <label>Icon name:</label>
                <input class="form-control" name="objectives_icon_name[]" type="text"
                  value="{{ old('objectives_icon_name.'.$index, $objective->icon->icon_name ) }}">
              </div>

              <!-- زر الحذف -->
              <div class="text-end mt-3">
                <button type="button"
                        class="admin-btn admin-btn-danger btn-sm"
                        onclick="confirmDeleteObjective('{{ $objective->id }}')">
                  <i class="fas fa-trash me-1"></i> Delete Objective
                </button>
              </div>
            </div>
          @endforeach
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

  <!-- نموذج حذف الأهداف -->
  @foreach($section->objective_title->objectives as $objective)
    <form id="delete-objective-form-{{ $objective->id }}"
          action="{{ route('objective.delete', ['objective' => $objective->id]) }}"
          method="POST" style="display: none;">
      @csrf
      @method('DELETE')
    </form>
  @endforeach
@endif

<!-- سكربت الحذف -->
<script>
  function confirmDeleteObjective(id) {
    if (confirm('هل أنت متأكد من حذف هذا الهدف؟')) {
      const form = document.getElementById('delete-objective-form-' + id);
      if (form) form.submit();
    }
  }
</script>