@if($section->social_media)
<form method="POST" action="{{ route('social.store', ['section' => $section->id]) }}" enctype="multipart/form-data" class="mb-4">
  @csrf
  <div class="card">
    <div class="card-body">
      <h2 class="card-title">Social Media</h2>

      <div id="media-fields-container">
        <div class="media-field border rounded p-3 mb-3">
          <label>URL:</label>
          <input type="url" class="form-control mb-2" name="media_url[]">

          <label>Social Media Icon:</label>
          <input type="file" class="form-control mb-2" name="media_icon[]">

          <label>Icon name:</label>
          <input type="text" class="form-control" name="media_icon_name[]">
        </div>
      </div>

      <div class="text-start mb-3">
  <button type="button" class="btn btn-primary" id="addMediaAccountBtn">+ Add Account</button>
</div>


      <div class="text-center">
        <button type="submit"
          class="btn px-5 save-button {{ session('saved_media_' . $section->id) ? 'btn-secondary' : 'btn-success' }}"
          {{ session('saved_media_' . $section->id) ? 'disabled' : '' }}>
          {{ session('saved_media_' . $section->id) ? 'Saved ✓' : 'Save' }}
        </button>
      </div>
    </div>
  </div>
</form>
@endif
