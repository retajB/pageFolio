
document.addEventListener('DOMContentLoaded', function () {
  const addBtn = document.getElementById('addLocationBtn');
  const container = document.getElementById('locationsContainer');

  addBtn.addEventListener('click', function () {
    const newItem = document.createElement('div');
    newItem.classList.add('location-item', 'admin-subcard', 'mb-3');

    newItem.innerHTML = `
      <div class="admin-form-group">
        <label>Location content:</label>
        <input type="text" name="locations_content[]" required>
      </div>

      <div class="admin-form-group">
        <label>City Name:</label>
        <input type="text" name="locations_city[]" required>
      </div>

      <div class="admin-form-group">
        <label>URL:</label>
        <input type="text" name="locations_url[]" required>
      </div>

      <div class="admin-form-group">
        <label>Image:</label>
        <div class="admin-file-upload">
          <input type="file" name="locations_image[]">
          <span class="admin-file-upload-label">Choose file...</span>
        </div>
      </div>

      <div class="admin-form-group">
        <label>Image name:</label>
        <input type="text" name="location_image_name[]">
      </div>
    `;

    container.appendChild(newItem);
  });
});
