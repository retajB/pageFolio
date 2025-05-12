<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <title>Admin Control Panel</title>
  
</head>
<body>
  
<h1>admin control panel</h1>

  <h2>User Registration</h2>
  <form action="#" method="post">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br><br>

    <label for="phone">Phone Number:</label><br>
    <input type="tel" id="phone" name="phone" required><br><br>

    <label for="national_id">National ID:</label><br>
    <input type="text" id="national_id" name="national_id" pattern="\d{10}" required>

    <h1> hiiiiiiiiiii</hi>

    <h2>Company Information Form</h2>

    <form method="POST" action="#">
        @csrf

        <div>
            <label for="name">Company Name:</label><br>
            <input type="text" id="name" name="name" required>
        </div><br>

        <div>
            <label for="domain_url">Domain URL:</label><br>
            <input type="url" id="domain_url" name="domain_url" required>
        </div><br>

        <div>
            <label for="slogan">Slogan:</label><br>
            <input type="text" id="slogan" name="slogan">
        </div><br>

        <div>
            <label for="logo_url">Logo URL:</label><br>
            <input type="url" id="logo_url" name="logo_url">
        </div><br>

        <button type="submit">update</button>
    </form>
</body>
</html>

</body>
</html>
