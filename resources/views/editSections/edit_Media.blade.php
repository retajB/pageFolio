@if($section && $section->company_media_accounts)
  <form method="POST" action="{{ route('media.update', ['section' => $section->id]) }}" enctype="multipart/form-data">
    @csrf
    @method('PATCH')

    <div class="card mb-4">
      <div class="card-body">
        <h2 class="card-title">Edit Social Media Accounts</h2>

        <div id="media-accounts-wrapper">
          @foreach($section->company_media_accounts as $index => $account)
            <div class="border p-3 mb-3 rounded">
              <input type="hidden" name="media_ids[]" value="{{ $account->id }}">

              <label for="media_url_{{ $index }}">Username / URL:</label>
              <input type="text" class="form-control mb-2" name="media_url[]" id="media_url_{{ $index }}"
                     value="{{ old("media_url.$index", $account->username_account) }}"
                     placeholder="رابط الحساب أو اسم المستخدم">

              <label for="media_icon_{{ $index }}">Icon Image:</label>
              <input type="file" class="form-control mb-2" name="media_icon[]" id="media_icon_{{ $index }}">

              <label for="media_icon_name_{{ $index }}">Icon name:</label>
              <input type="text" class="form-control mb-2" name="media_icon_name[]" id="media_icon_name_{{ $index }}"
                     value="{{ old("media_icon_name.$index", $account->icon->icon_name ?? '') }}"
                     placeholder="مثلاً: Instagram">
            </div>
          @endforeach
        </div>

        <div class="text-end">
          <button type="submit" class="btn btn-success px-5">Save Changes</button>
        </div>
      </div>
    </div>
  </form>
@endif