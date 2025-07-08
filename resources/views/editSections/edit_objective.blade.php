@if($section->objectives&& isset($section->service_title))

<form method="POST" action="{{ route('objective.update', ['section' => $section->id ,'objective_title'=>$section->objective_title->id ]) }}" enctype="multipart/form-data" class="mb-4">
    @csrf
    <div class="card mb-4">
        <div class="card-body">
            <h2 class="card-title">Objectives</h2>

            <div class="mb-3">
                <label>Section name:</label>
                <input class="form-control" name="objectives_title" type="text"
                 value="{{ old('objective_title', $section->objective_title->section_name ?? '') }}"
                  placeholder="مثلاً : أهدافنا">
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

                <div class="text-end">
                    <button type="submit" class="btn btn-success px-5">Save</button>
                </div>
            </div>
        </div>
    </div>
</form>

@endif
