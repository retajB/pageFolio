
document.addEventListener("DOMContentLoaded", function () {
  const addBtn = document.getElementById('addServiceBtn');
  const container = document.getElementById('servicesContainer');

  if (addBtn && container) {
    addBtn.addEventListener('click', function () {
      const newService = document.createElement('div');
      newService.classList.add('service-item', 'admin-subcard', 'mb-3');

      newService.innerHTML = `
        <div class="admin-form-group">
          <label>Content:</label>
          <textarea name="services_content[]" rows="3" required></textarea>
        </div>

        <div class="admin-form-group">
          <label>Services Image:</label>
          <div class="admin-file-upload">
            <input type="file" name="services_image[]">
            <span class="admin-file-upload-label">Choose file...</span>
          </div>
        </div>

        <div class="admin-form-group">
          <label>Image name:</label>
          <input type="text" name="services_image_name[]">
        </div>
      `;

      container.appendChild(newService);
    });
  }
});
