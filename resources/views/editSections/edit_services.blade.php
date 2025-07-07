@if($section->services)
      <form method="POST" action="{{ route('service.store', ['section' => $section->id]) }}" enctype="multipart/form-data" class="mb-4" >
        @csrf
        <div class="card">
          <div class="card-body">
            <h2 class="card-title">Services</h2>

            <label>Section name:</label>
            <input class="form-control mb-3" name="services_title" type="text" placeholder="مثلاً : خدماتنا">

            <div id="servicesContainer">
              <div class="service-item mb-3">
                <label>Content:</label>
                <textarea class="form-control mb-2" name="services_content[]" rows="3"></textarea>

                <label>Services Image:</label>
                <input type="file" class="form-control mb-2" name="services_image[]">

                <label>Image name:</label>
                <input type="text" class="form-control mb-2" name="services_image_name[]">
              </div>
            </div>

         <div class="text-end">
      <button type="submit" class="btn btn-success">Save</button>
    </div>
          </div>
        </div>
      </form>
@endif