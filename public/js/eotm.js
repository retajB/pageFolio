
    document.addEventListener('DOMContentLoaded', function () {
        const addBtn = document.getElementById('addEOTMBtn');
        const container = document.getElementById('eotmContainer');

        addBtn.addEventListener('click', function () {
            const newItem = document.createElement('div');
            newItem.classList.add('eotm-item', 'mb-3');
            newItem.innerHTML = `
                <label>Employee Name:</label>
                <input class="form-control mb-2" name="employee_name[]" type="text">

                <label>Description:</label>
                <textarea class="form-control mb-2" name="employee_content[]" rows="3"></textarea>

                <label>Employee Image:</label>
                <input type="file" class="form-control mb-2" name="employee_image[]">

                <label>Image name:</label>
                <input type="text" class="form-control mb-2" name="employee_image_name[]">
            `;

            container.appendChild(newItem);
        });
    });

