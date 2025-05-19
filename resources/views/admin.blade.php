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

    <form action="#" method="POST" enctype="multipart/form-data">
      @csrf

        <div class="d-grid gap-3 col-6 mx-auto">
            <!-- زر إنشاء شركة جديدة -->
            <a href="{{ route('create.page') }}" class="btn  btn-success btn-lg"> Create New Landing Page </a>


    
            <!-- زر عرض الشركات الموجودة -->

            <a href="{{route('edit.page')}}" class="btn btn-primary btn-lg">  edit existing landing page </a>
         <a href="{{route('companies')}}" class="btn btn-primary btn-lg">  list existing landing page </a>
        </div>
    </div>



</body>
</html>
