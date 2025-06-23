document.addEventListener("DOMContentLoaded", function () {
    const addBtn = document.getElementById('addServiceBtn');
    const container = document.getElementById('servicesContainer');

    if (addBtn && container) {
        addBtn.addEventListener('click', function () {
            const newService = document.createElement('div');
            newService.classList.add('service-item', 'mb-3');

            newService.innerHTML = `
                <label>Content:</label>
                <textarea class="form-control mb-2" name="services_content[]" rows="3"></textarea>

                <label>Services Image:</label>
                <input type="file" class="form-control mb-2" name="services_image[]">

                <label>Image name:</label>
                <input type="text" class="form-control mb-2" name="services_image_name[]">
            `;

            container.appendChild(newService);
        });
    }
});
