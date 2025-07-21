@if($section->employee_of_the_months && isset($section->eotm_title))
  <form method="POST"
        action="{{ route('eotm.update', ['section' => $section->id, 'eotm_title' => $section->eotm_title->id]) }}"
        enctype="multipart/form-data" class="mb-4" id="eotmForm">
    @csrf
    @method('PATCH')

    <div class="admin-card">
      <div class="admin-card-header">
        <h2><i class="fas fa-user-tie"></i> Employee of the Month</h2>
      </div>

      <div class="admin-card-body">
        <!-- عنوان القسم -->
        <div class="admin-subcard mb-4 p-3">
          <div class="admin-form-group">
            <label>Section name:</label>
            <input class="form-control" type="text" name="EOTM_title"
                   value="{{ old('EOTM_title', $section->eotm_title->section_name ?? '') }}"
                   placeholder="مثال: موظفين الشهر">
          </div>
        </div>

        <!-- الموظفون -->
        <div id="eotmContainer">
          @foreach($section->eotm_title->employee_of_the_months as $index => $employee)
            <div class="eotm-item admin-subcard mb-4 p-3">
              <input type="hidden" name="employee_id[]" value="{{ $employee->id }}">
              <input type="hidden" name="employee_image_id[]" value="{{ $employee->image->id ?? '' }}">

              <div class="admin-form-group">
                <label>Employee Name:</label>
                <input class="form-control" name="employee_name[]" type="text"
                       value="{{ old("employee_name.$index", $employee->employee_name) }}">
              </div>

              <div class="admin-form-group">
                <label>Description:</label>
                <textarea class="form-control" name="employee_content[]" rows="3">{{ old("employee_content.$index", $employee->content) }}</textarea>
              </div>

              <div class="admin-form-group">
                <label>Employee Image:</label>

                @if ($employee->image->image_url ?? false)
                  <div class="mb-2">
                    <img src="{{ asset('storage/' . $employee->image->image_url) }}" alt="Employee Image" height="80">
                  </div>
                @endif

                <div class="admin-file-upload">
                  <input type="file" name="employee_image[]">
                  <span class="admin-file-upload-label">Choose file...</span>
                </div>
              </div>

              <div class="admin-form-group">
                <label>Image name:</label>
                <input type="text" class="form-control" name="employee_image_name[]"
                       value="{{ old("employee_image_name.$index", $employee->image->image_name ?? '') }}">
              </div>

              <!-- زر الحذف -->
              <div class="text-end mt-3">
                <button type="button"
                        class="admin-btn admin-btn-danger btn-sm"
                        onclick="confirmDeleteEmployee('{{ $employee->id }}')">
                  <i class="fas fa-trash me-1"></i> Delete Employee
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

  <!-- نماذج حذف الموظفين -->
  @foreach($section->eotm_title->employee_of_the_months as $employee)
    <form id="delete-employee-form-{{ $employee->id }}"
          action="{{ route('eotm.delete', ['employee' => $employee->id]) }}"
          method="POST" style="display: none;">
      @csrf
      @method('DELETE')
    </form>
  @endforeach

  <!-- سكربت الحذف -->
  <script>
    function confirmDeleteEmployee(id) {
      if (confirm('هل أنت متأكد من حذف هذا الموظف؟')) {
        const form = document.getElementById('delete-employee-form-' + id);
        if (form) form.submit();
      }
    }
  </script>
@endif