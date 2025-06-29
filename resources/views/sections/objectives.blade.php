@if($section->objectives)

<form method="POST" action="{{ route('objective.store', ['section' => $section->id]) }}" enctype="multipart/form-data" class="mb-4">
    @csrf
    <div class="card mb-4">
        <div class="card-body">
            <h2 class="card-title">Objectives</h2>

            <div class="mb-3">
                <label>Section name:</label>
                <input class="form-control" name="objectives_title" type="text" placeholder="مثلاً : أهدافنا">
            </div>

            <div id="objectivesContainer">
                <div class="objective-item mb-3">
                    <label>Content:</label>
                    <textarea class="form-control mb-2" name="objectives_content[]" rows="3"></textarea>

                    <label>Icon:</label>
                    <input type="file" class="form-control mb-2" name="objectives_icon[]">

                    <label>Icon name:</label>
                    <input class="form-control mb-2" name="objectives_icon_name[]" type="text">
                </div>
            </div>

            <button type="button" class="btn btn-primary mb-3" id="addObjectiveBtn">+ Add Objective</button>

            <div class="text-center">
                <button type="submit"
                        class="btn px-5 save-button {{ session('saved_objectives_' . $section->id) ? 'btn-secondary' : 'btn-success' }}"
                        {{ session('saved_objectives_' . $section->id) ? 'disabled' : '' }}>
                    {{ session('saved_objectives_' . $section->id) ? 'Saved ✓' : 'Save' }}
                </button>
            </div>
        </div>
    </div>
</form>

@endif
