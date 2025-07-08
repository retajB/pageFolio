@if($section && $section->company_media_accounts)
  <form method="POST" action="{{ route('media.update', ['section' => $section->id]) }}" enctype="multipart/form-data">
    @csrf
    @method('PATCH')

    <div class="admin-card">
      <div class="admin-card-header">
        <h2><i class="fas fa-share-alt me-2"></i>  Social Media Accounts</h2>
      </div>

      <div class="admin-card-body">
        <div id="media-accounts-wrapper">
          @foreach($section->company_media_accounts as $index => $account)
            <div class="admin-subcard mb-4 p-3">
              <input type="hidden" name="media_ids[]" value="{{ $account->id }}">

              <div class="admin-form-group">
                <label for="media_url_{{ $index }}">Username / URL:</label>
                <input type="text" class="form-control" name="media_url[]" id="media_url_{{ $index }}"
                       value="{{ old('media_url.$index', $account->username_account) }}"
                       placeholder="رابط الحساب أو اسم المستخدم">
              </div>

              <div class="admin-form-group">
                <label for="media_icon_{{ $index }}">Icon Image:</label>

                @if ($account->icon->icon_url ?? false)
                  <div class="mb-2">
                    <img src="{{ asset('storage/' . $account->icon->icon_url) }}" alt="Media Icon" height="60">
                  </div>
                @endif

                <div class="admin-file-upload">
                  <input type="file" name="media_icon[]" id="media_icon_{{ $index }}">
                  <span class="admin-file-upload-label">Choose file...</span>
                </div>
              </div>

              <div class="admin-form-group">
                <label for="media_icon_name_{{ $index }}">Icon name:</label>
                <input type="text" class="form-control" name="media_icon_name[]" id="media_icon_name_{{ $index }}"
                       value="{{ old("media_icon_name.$index", $account->icon->icon_name ?? '') }}"
                       placeholder="مثلاً: Instagram">
              </div>
            </div>
          @endforeach
        </div>

        <div class="admin-form-actions text-center mt-4">
          <button type="submit" class="admin-btn admin-btn-navy">
            <i class="fas fa-save me-2"></i> Save Changes
          </button>
        </div>
      </div>
    </div>
  </form>
@endif