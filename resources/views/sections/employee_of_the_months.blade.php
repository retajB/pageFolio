@if($section->employee_of_the_months)

  <form method="POST" action="{{ route('eotm.store', ['section' => $section->id]) }}" enctype="multipart/form-data" class="mb-4" id="eotmForm">
    @csrf
    <div class="card mb-4">
        <div class="card-body">
            <h2 class="card-title">Employee of the Month</h2>

            <label>Section name:</label>
            <input class="form-control mb-3" type="text" name="EOTM_title" placeholder="مثال: موظفين الشهر">

            <div id="eotmContainer">
                <div class="eotm-item mb-3">
                    <label>Employee Name:</label>
                    <input class="form-control mb-2" name="employee_name[]" type="text">

                    <label>Description:</label>
                    <textarea class="form-control mb-2" name="employee_content[]" rows="3"></textarea>

                    <label>Employee Image:</label>
                    <input type="file" class="form-control mb-2" name="employee_image[]">

                    <label>Image name:</label>
                    <input type="text" class="form-control mb-2" name="employee_image_name[]">
                </div>
            </div>

            <button type="button" class="btn btn-primary mb-3" id="addEOTMBtn">+ Add Employee</button>

            <div class="text-center mt-3">
                <button type="submit"
                    class="btn px-5 save-button {{ session('saved_eotm_' . $section->id) ? 'btn-secondary' : 'btn-success' }}"
                    {{ session('saved_eotm_' . $section->id) ? 'disabled' : '' }}>
                    {{ session('saved_eotm_' . $section->id) ? 'Saved ✓' : 'Save' }}
                </button>
            </div>
        </div>
    </div>
</form>

@endif