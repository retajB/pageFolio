@if($section->social_media)
    <!-- Social Media -->
    <form class="mb-4">
            @csrf

      <div class="card">
        <div class="card-body">
          <h2 class="card-title">Social Media</h2>
          <label>Section name:</label>
          <input class="form-control" type="text" name="background_title" placeholder="e.g. Social Media">
          <div class="text-center mt-3">
            <button type="submit" class="btn btn-success px-5">Save</button>
          </div>
        </div>
      </div>

        <label>GitHub URL:</label>
        <input type="url" class="form-control mb-2" name="github_url">

        <label>Facebook URL:</label>
        <input type="url" class="form-control mb-2" name="facebook_url">

        <label>Twitter URL:</label>
        <input type="url" class="form-control" name="twitter_url">
      </div>
    </div>
    @endif