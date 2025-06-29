
document.addEventListener('DOMContentLoaded', function () {
    const addBtn = document.getElementById('addLocationBtn');
    const container = document.getElementById('locationsContainer');

    addBtn.addEventListener('click', function () {
        const newItem = document.createElement('div');
        newItem.classList.add('location-item', 'mb-3');
        newItem.innerHTML = `
            <label>Location content:</label>
            <input class="form-control mb-2" name="locations_content[]" type="text">

            <label>City Name:</label>
            <input class="form-control mb-2" name="locations_city[]" type="text">

            <label>URL:</label>
            <input class="form-control mb-2" name="locations_url[]" type="text">

            <label>Image:</label>
            <input type="file" class="form-control mb-2" name="locations_image[]">

            <label>Image name:</label>
            <input type="text" class="form-control mb-2" name="location_image_name[]">
        `;
        container.appendChild(newItem);
    });
});

