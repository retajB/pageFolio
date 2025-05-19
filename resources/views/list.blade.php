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
  
  
 @foreach($companies as $company)
    <li class="list-group-item">
        <a href="{{ route('companies.details') }}" style="color: cornflowerblue">
            {{ $company->name }}
        </a>
    </li>
@endforeach

</div>