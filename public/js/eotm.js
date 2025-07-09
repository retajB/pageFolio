
document.addEventListener('DOMContentLoaded', function () {
  const addBtn = document.getElementById('addEOTMBtn');
  const container = document.getElementById('eotmContainer');

  addBtn.addEventListener('click', function () {
    const newItem = document.createElement('div');
    newItem.classList.add('eotm-item', 'admin-subcard', 'mb-3');

    newItem.innerHTML = `
      <div class="admin-form-group">
        <label>Employee Name:</label>
        <input type="text" name="employee_name[]" required>
      </div>

      <div class="admin-form-group">
        <label>Description:</label>
        <textarea name="employee_content[]" rows="3" required></textarea>
      </div>

      <div class="admin-form-group">
        <label>Employee Image:</label>
        <div class="admin-file-upload">
          <input type="file" name="employee_image[]">
          <span class="admin-file-upload-label">Choose file...</span>
        </div>
      </div>

      <div class="admin-form-group">
        <label>Image name:</label>
        <input type="text" name="employee_image_name[]">
      </div>
    `;

    container.appendChild(newItem);
  });
});
