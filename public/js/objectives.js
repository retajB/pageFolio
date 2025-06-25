document.addEventListener('DOMContentLoaded', function () {
    const addBtn = document.getElementById('addObjectiveBtn');
    const container = document.getElementById('objectivesContainer');

    addBtn.addEventListener('click', function () {
        const newItem = document.createElement('div');
        newItem.classList.add('objective-item', 'mb-3');
        newItem.innerHTML = `
            <label>Content:</label>
            <textarea class="form-control mb-2" name="objectives_content[]" rows="3"></textarea>

            <label>Icon:</label>
            <input type="file" class="form-control mb-2" name="objectives_icon[]">

            <label>Icon name:</label>
            <input class="form-control mb-2" name="objectives_icon_name[]" type="text">
        `;

        container.appendChild(newItem);
    });
});
