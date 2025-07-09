
document.addEventListener('DOMContentLoaded', function () {
  const addBtn = document.getElementById('addObjectiveBtn');
  const container = document.getElementById('objectivesContainer');

  addBtn.addEventListener('click', function () {
    const newItem = document.createElement('div');
    newItem.classList.add('objective-item', 'admin-subcard', 'mb-3');

    newItem.innerHTML = `
      <div class="admin-form-group">
        <label>Content:</label>
        <textarea name="objectives_content[]" rows="3" required></textarea>
      </div>

      <div class="admin-form-group">
        <label>Icon:</label>
        <div class="admin-file-upload">
          <input type="file" name="objectives_icon[]">
          <span class="admin-file-upload-label">Choose file...</span>
        </div>
      </div>

      <div class="admin-form-group">
        <label>Icon name:</label>
        <input type="text" name="objectives_icon_name[]">
      </div>
    `;

    container.appendChild(newItem);
  });
});
