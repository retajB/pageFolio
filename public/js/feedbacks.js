document.addEventListener('DOMContentLoaded', function () {
    const addBtn = document.getElementById('addFeedbackBtn');
    const container = document.getElementById('feedbacksContainer');

    addBtn.addEventListener('click', function () {
        const newItem = document.createElement('div');
        newItem.classList.add('feedback-item', 'mb-3');
        newItem.innerHTML = `
            <label>User Name:</label>
            <input class="form-control mb-2" name="feedbacks_userName[]" type="text">

            <label>Feedback Content:</label>
            <textarea class="form-control mb-2" name="feedbacks_content[]" rows="3"></textarea>

            <label>Rating (1-5):</label>
            <input class="form-control mb-2" name="feedbacks_rating[]" type="number" min="1" max="5">
        `;
        container.appendChild(newItem);
    });
});
