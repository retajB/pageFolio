
document.addEventListener('DOMContentLoaded', function () {
  const addBtn = document.getElementById('addMediaAccountBtn');
  const container = document.getElementById('media-fields-container');

  addBtn.addEventListener('click', function () {
    const newItem = document.createElement('div');
    newItem.classList.add('media-field', 'admin-subcard', 'mb-3');

    newItem.innerHTML = `
      <div class="admin-form-group">
        <label>URL:</label>
        <input type="url" name="media_url[]" required>
      </div>

      <div class="admin-form-group">
        <label>Social Media Icon:</label>
        <div class="admin-file-upload">
          <input type="file" name="media_icon[]">
          <span class="admin-file-upload-label">Choose file...</span>
        </div>
      </div>

      <div class="admin-form-group">
        <label>Icon name:</label>
        <input type="text" name="media_icon_name[]">
      </div>
    `;

    container.appendChild(newItem);
  });
});
