
document.getElementById('addPartnerBtn').addEventListener('click', function () {
  const container = document.getElementById('partnersContainer');

  const newItem = document.createElement('div');
  newItem.classList.add('partner-item', 'admin-subcard', 'mb-3');

  newItem.innerHTML = `
    <div class="admin-form-group">
      <label>Partner Image:</label>
      <div class="admin-file-upload">
        <input type="file" name="partners_image[]">
        <span class="admin-file-upload-label">Choose file...</span>
      </div>
    </div>

    <div class="admin-form-group">
      <label>Image name:</label>
      <input type="text" name="partners_image_name[]">
    </div>
  `;

  container.appendChild(newItem);
});
