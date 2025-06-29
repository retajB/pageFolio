@if($section->partners)

<form method="POST" action="{{ route('partner.store', ['section' => $section->id]) }}" enctype="multipart/form-data">
    @csrf
    <div class="card mb-4">
        <div class="card-body">
            <h2 class="card-title">Partners</h2>

            <div class="mb-3">
                <label>Section name:</label>
                <input class="form-control" name="partners_title" type="text" placeholder="مثلاً: الشركاء">
            </div>

            <div class="mb-3">
                <label>Content:</label>
                <textarea class="form-control" name="partners_content" rows="3"></textarea>
            </div>

            <div id="partnersContainer">
                <div class="partner-item mb-3">
                    <label>Partner Image:</label>
                    <input type="file" class="form-control mb-2" name="partners_image[]">

                    <label>Image name:</label>
                    <input type="text" class="form-control mb-2" name="partners_image_name[]">
                </div>
            </div>

            <button type="button" class="btn btn-primary mb-3" id="addPartnerBtn">+ Add Image</button>

            <div class="text-center mt-4">
                <button type="submit"
                    class="btn px-5 save-button {{ session('saved_partners_' . $section->id) ? 'btn-secondary' : 'btn-success' }}"
                    {{ session('saved_partners_' . $section->id) ? 'disabled' : '' }}>
                    {{ session('saved_partners_' . $section->id) ? 'Saved ✓' : 'Save' }}
                </button>
            </div>
        </div>
    </div>
</form>

@endif