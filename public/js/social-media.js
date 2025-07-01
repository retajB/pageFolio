document.addEventListener("DOMContentLoaded", function () {
    const addBtn = document.getElementById('addMediaAccountBtn');
    const container = document.getElementById('media-fields-container');

    if (addBtn && container) {
        addBtn.addEventListener('click', function () {
            const newField = document.createElement('div');
            newField.classList.add('media-field', 'border', 'rounded', 'p-3', 'mb-3');

            newField.innerHTML = `
                <label>URL:</label>
                <input type="url" class="form-control mb-2" name="media_url[]">

                <label>Social Media Icon:</label>
                <input type="file" class="form-control mb-2" name="media_icon[]">

                <label>Icon name:</label>
                <input type="text" class="form-control" name="media_icon_name[]">
            `;

            container.appendChild(newField);
        });
    }
});
