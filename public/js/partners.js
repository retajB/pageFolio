document.getElementById('addPartnerBtn').addEventListener('click', function () {
    const container = document.getElementById('partnersContainer');

    const newItem = document.createElement('div');
    newItem.classList.add('partner-item', 'mb-3');
    newItem.innerHTML = `
        <label>Partner Image:</label>
        <input type="file" class="form-control mb-2" name="partners_image[]">

        <label>Image name:</label>
        <input type="text" class="form-control mb-2" name="partners_image_name[]">
    `;

    container.appendChild(newItem);
});
