 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Control Panel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-4">

  <div class="container">
    <h1 class="mb-5 text-center">Admin Control Panel</h1>

    <!-- Theme Settings -->
    <form method="POST" action="{{route('edit.page')}}" enctype="multipart/form-data" class="mb-4">
      @csrf
      <div class="card">
      <div class="card">
        <div class="card-body">
          <h2 class="card-title">Theme Settings</h2>

          <div class="mb-3">
            <label for="backgroundColor1" class="form-label">Background Color 1:</label>
            <input type="color" class="form-control form-control-color" id="backgroundColor1" name="backgroundColor1" value="#ffffff">
          </div>

          <div class="mb-3">
            <label for="backgroundColor2" class="form-label">Background Color 2:</label>
            <input type="color" class="form-control form-control-color" id="backgroundColor2" name="backgroundColor2" value="#000000">
          </div>

          <div class="mb-3">
            <label for="textColor" class="form-label">Text Color:</label>
            <input type="color" class="form-control form-control-color" id="textColor" name="textColor" value="#000000">
          </div>

        
          <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-success">Save</button>
            <button type="button" class="btn btn-primary">Edit</button>
            <button type="button" class="btn btn-danger">Delete</button>
          </div>
        </div>
      </div>
    </form>

    <!-- Who We Are -->
    <form method="POST" action="/save-who-we-are" enctype="multipart/form-data" class="mb-4">
      @csrf
      <div class="card">
        <div class="card-body">
          <h2 class="card-title">Who We Are</h2>
    </form>

    <!-- Who We Are -->
    <form method="POST" action="/save-who-we-are" enctype="multipart/form-data" class="mb-4">
      @csrf
      <div class="card">
        <div class="card-body">
          <h2 class="card-title">Who We Are</h2>

          <div class="mb-3">
            <label>Content:</label>
            <textarea class="form-control" name="who_we_are_content" rows="3"></textarea>
          </div>
          <div class="mb-3">
            <label>Content:</label>
            <textarea class="form-control" name="who_we_are_content" rows="3"></textarea>
          </div>

          <div class="mb-3">
            <label>Background Image:</label>
            <input type="file" class="form-control"   id="Background_Image" name="Background_Image">
          </div>
          <div class="mb-3">
            <label>Background Image:</label>
            <input type="file" class="form-control"   id="Background_Image" name="Background_Image">
          </div>

          <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-success">Save</button>
            <button type="button" class="btn btn-primary">Edit</button>
            <button type="button" class="btn btn-danger">Delete</button>
          </div>
        </div>
      </div>
    </form>

    <!-- Services -->
    <form method="POST" action="/save-services" enctype="multipart/form-data" class="mb-4">
      @csrf
      <div class="card">
        <div class="card-body">
          <h2 class="card-title">Services</h2>

          <div class="mb-3">
            <label>Description:</label>
            <textarea class="form-control" name="services_content" rows="3"></textarea>
          </div>
          <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-success">Save</button>
            <button type="button" class="btn btn-primary">Edit</button>
            <button type="button" class="btn btn-danger">Delete</button>
          </div>
        </div>
      </div>
    </form>

    <!-- Services -->
    <form method="POST" action="/save-services" enctype="multipart/form-data" class="mb-4">
      @csrf
      <div class="card">
        <div class="card-body">
          <h2 class="card-title">Services</h2>

          <div class="mb-3">
            <label>Description:</label>
            <textarea class="form-control" name="services_content" rows="3"></textarea>
          </div>

          <div class="mb-3">
            <label>Image:</label>
            <input type="file" class="form-control"  id="Services_Image" name="Services_Image">
          </div>
          <div class="mb-3">
            <label>Image:</label>
            <input type="file" class="form-control"  id="Services_Image" name="Services_Image">
          </div>

          <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-success">Save</button>
            <button type="button" class="btn btn-primary">Edit</button>
            <button type="button" class="btn btn-danger">Delete</button>
          </div>
        </div>
      </div>
    </form>

    <!-- Objectives -->
    <form method="POST" action="/save-objectives" enctype="multipart/form-data" class="mb-4">
      @csrf
      <div class="card">
        <div class="card-body">
          <h2 class="card-title">Objectives</h2>

          <div class="mb-3">
            <label>Content:</label>
            <textarea class="form-control" name="objectives_content" rows="3"></textarea>
          </div>
          <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-success">Save</button>
            <button type="button" class="btn btn-primary">Edit</button>
            <button type="button" class="btn btn-danger">Delete</button>
          </div>
        </div>
      </div>
    </form>

    <!-- Objectives -->
    <form method="POST" action="/save-objectives" enctype="multipart/form-data" class="mb-4">
      @csrf
      <div class="card">
        <div class="card-body">
          <h2 class="card-title">Objectives</h2>

          <div class="mb-3">
            <label>Content:</label>
            <textarea class="form-control" name="objectives_content" rows="3"></textarea>
          </div>

          <div class="mb-3">
            <label>Image:</label>
            <input type="file" class="form-control" id="objectives_Image" name="objectives_Image">
          </div>
          <div class="mb-3">
            <label>Image:</label>
            <input type="file" class="form-control" id="objectives_Image" name="objectives_Image">
          </div>

          <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-success">Save</button>
            <button type="button" class="btn btn-primary">Edit</button>
            <button type="button" class="btn btn-danger">Delete</button>
          </div>
        </div>
      </div>
    </form>

    <!-- Partners -->
    <form method="POST" action="/save-partners" class="mb-4">
      @csrf
      <div class="card">
        <div class="card-body">
          <h2 class="card-title">Partners</h2>


          <div class="mb-3">
            <label>Image:</label>
            <input type="file" class="form-control" id="partners_Image" name="partners_Image">
          </div>
          <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-success">Save</button>
            <button type="button" class="btn btn-primary">Edit</button>
            <button type="button" class="btn btn-danger">Delete</button>
          </div>
        </div>
      </div>
    </form>

    <!-- Partners -->
    <form method="POST" action="/save-partners" class="mb-4">
      @csrf
      <div class="card">
        <div class="card-body">
          <h2 class="card-title">Partners</h2>


          <div class="mb-3">
            <label>Image:</label>
            <input type="file" class="form-control" id="partners_Image" name="partners_Image">
          </div>

          <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-success">Save</button>
            <button type="button" class="btn btn-primary">Edit</button>
            <button type="button" class="btn btn-danger">Delete</button>
          </div>
        </div>
      </div>
    </form>

    <!-- Feedbacks -->
    <form method="POST" action="/save-feedbacks" class="mb-4">
      @csrf
      <div class="card">
        <div class="card-body">
          <h2 class="card-title">Feedbacks</h2>

          <div class="mb-3">
            <label>User Name:</label>
            <input class="form-control" name="feedbacks_userName" rows="3"></input>
          </div>
          <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-success">Save</button>
            <button type="button" class="btn btn-primary">Edit</button>
            <button type="button" class="btn btn-danger">Delete</button>
          </div>
        </div>
      </div>
    </form>

    <!-- Feedbacks -->
    <form method="POST" action="/save-feedbacks" class="mb-4">
      @csrf
      <div class="card">
        <div class="card-body">
          <h2 class="card-title">Feedbacks</h2>

          <div class="mb-3">
            <label>User Name:</label>
            <input class="form-control" name="feedbacks_userName" rows="3"></input>
          </div>

          <div class="mb-3">
            <label>Feedback Content:</label>
            <textarea class="form-control" name="feedbacks_content" rows="3"></textarea>
          </div>
          <div class="mb-3">
            <label>Feedback Content:</label>
            <textarea class="form-control" name="feedbacks_content" rows="3"></textarea>
          </div>

           <div class="mb-3">
            <label>Rating:</label>
            <input class="form-control" name="feedbacks_rating" rows="3"></input>
          </div>

        
          <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-success">Save</button>
            <button type="button" class="btn btn-primary">Edit</button>
            <button type="button" class="btn btn-danger">Delete</button>
          </div>
        </div>
      </div>
    </form>

    <!-- Individuals -->
    <form method="POST" action="/save-individuals" class="mb-4">
      @csrf
      <div class="card">
        <div class="card-body">
          <h2 class="card-title">Individuals</h2>

          <div class="mb-3">
            <label>employee name:</label>
            <input class="form-control" name="employee_name" rows="3"></input>
          </div>

          <div class="mb-3">
            <label>Description:</label>
            <textarea class="form-control" name="content" rows="3"></textarea>
          </div>
           <div class="mb-3">
            <label>Rating:</label>
            <input class="form-control" name="feedbacks_rating" rows="3"></input>
          </div>

        
          <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-success">Save</button>
            <button type="button" class="btn btn-primary">Edit</button>
            <button type="button" class="btn btn-danger">Delete</button>
          </div>
        </div>
      </div>
    </form>

    <!-- Individuals -->
    <form method="POST" action="/save-individuals" class="mb-4">
      @csrf
      <div class="card">
        <div class="card-body">
          <h2 class="card-title">Individuals</h2>

          <div class="mb-3">
            <label>employee name:</label>
            <input class="form-control" name="employee_name" rows="3"></input>
          </div>

          <div class="mb-3">
            <label>Description:</label>
            <textarea class="form-control" name="content" rows="3"></textarea>
          </div>

           <div class="mb-3">
            <label>Image:</label>
            <input type="file" class="form-control" id="employee_Image" name="employee_Image">
          </div>
           <div class="mb-3">
            <label>Image:</label>
            <input type="file" class="form-control" id="employee_Image" name="employee_Image">
          </div>

          <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-success">Save</button>
            <button type="button" class="btn btn-primary">Edit</button>
            <button type="button" class="btn btn-danger">Delete</button>
          </div>
        </div>
      </div>
    </form>

    <!-- Social Media -->
    <form method="POST" action="/save-social-media" class="mb-4">
      @csrf
      <div class="card">
        <div class="card-body">
          <h2 class="card-title">Social Media</h2>

          <div class="mb-3">
            <label>linkedIn URL:</label>
            <input type="url" class="form-control mb-2" name="facebook_url">
          </div>

           <div class="mb-3">
            <label> GitHub URL:</label>
            <input type="url" class="form-control mb-2" name="facebook_url">
          </div>

           <div class="mb-3">
            <label>linkedIn URL:</label>
            <input type="url" class="form-control mb-2" name="facebook_url">
          </div>

        
          <div class="mb-3">
            <label>Twitter URL:</label>
            <input type="url" class="form-control" name="twitter_url">
          </div>

          <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-success">Save</button>
            <button type="button" class="btn btn-primary">Edit</button>
            <button type="button" class="btn btn-danger">Delete</button>
          </div>
        </div>
          <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-success">Save</button>
            <button type="button" class="btn btn-primary">Edit</button>
            <button type="button" class="btn btn-danger">Delete</button>
          </div>
        </div>
      </div>
    </form>

    <!-- Social Media -->
    <form method="POST" action="/save-social-media" class="mb-4">
      @csrf
      <div class="card">
        <div class="card-body">
          <h2 class="card-title">Social Media</h2>

          <div class="mb-3">
            <label>linkedIn URL:</label>
            <input type="url" class="form-control mb-2" name="facebook_url">
          </div>

           <div class="mb-3">
            <label> GitHub URL:</label>
            <input type="url" class="form-control mb-2" name="facebook_url">
          </div>

           <div class="mb-3">
            <label>linkedIn URL:</label>
            <input type="url" class="form-control mb-2" name="facebook_url">
          </div>

        
          <div class="mb-3">
            <label>Twitter URL:</label>
            <input type="url" class="form-control" name="twitter_url">
          </div>

          <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-success">Save</button>
            <button type="button" class="btn btn-primary">Edit</button>
            <button type="button" class="btn btn-danger">Delete</button>
          </div>
        </div>
      </div>
    </form>

    <!-- Locations -->
    <form method="POST" action="/save-locations" class="mb-4">
      @csrf
      <div class="card">
        <div class="card-body">
          <h2 class="card-title">Locations</h2>

          <div class="mb-3">
            <label>Locations:</label>
            <input class="form-control" name="locations_content" rows="3"></input>
          </div>

 <div class="mb-3">
            <label>Image:</label>
            <input type="file" class="form-control" id="Location_Image" name="Locations_url">
          </div>

          <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-success">Save</button>
            <button type="button" class="btn btn-primary">Edit</button>
            <button type="button" class="btn btn-danger">Delete</button>
          </div>
        </div>
    
      </div>
    
    
    </form>

    <!-- Locations -->
    <form method="POST" action="/save-locations" class="mb-4">
      @csrf
      <div class="card">
        <div class="card-body">
          <h2 class="card-title">Locations</h2>

          <div class="mb-3">
            <label>Locations:</label>
            <input class="form-control" name="locations_content" rows="3"></input>
          </div>

 <div class="mb-3">
            <label>Image:</label>
            <input type="file" class="form-control" id="Location_Image" name="Locations_url">
          </div>

          <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-success">Save</button>
            <button type="button" class="btn btn-primary">Edit</button>
            <button type="button" class="btn btn-danger">Delete</button>
          </div>
        </div>
    
      </div>
    
    
    </form>


  </div>
</body>
</html>