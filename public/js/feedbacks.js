
document.addEventListener('DOMContentLoaded', function () {
  const addBtn = document.getElementById('addFeedbackBtn');
  const container = document.getElementById('feedbacksContainer');

  addBtn.addEventListener('click', function () {
    const newItem = document.createElement('div');
    newItem.classList.add('feedback-item', 'admin-subcard', 'mb-3');

    newItem.innerHTML = `
      <div class="admin-form-group">
        <label>User Name:</label>
        <input type="text" name="feedbacks_userName[]" required>
      </div>

      <div class="admin-form-group">
        <label>Feedback Content:</label>
        <textarea name="feedbacks_content[]" rows="3" required></textarea>
      </div>

      <div class="admin-form-group">
        <label>Rating (1-5):</label>
        <input type="number" name="feedbacks_rating[]" min="1" max="5" required>
      </div>
    `;

    container.appendChild(newItem);
  });
});
