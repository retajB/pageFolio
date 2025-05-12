<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <title>Admin Control Panel</title>
</head>
<body>

  <h1>Admin Control Panel</h1>

  <!-- Combined Form for User Registration, Company Info, and Theme -->
  <form action="#" method="POST">

    <!-- User Registration Section -->
    <h2>User Registration</h2>
    <label for="user_name">Name:</label><br>
    <input type="text" id="user_name" name="name" required><br><br>

    <label for="user_email">Email:</label><br>
    <input type="email" id="user_email" name="email" required><br><br>

    <label for="user_phone">Phone Number:</label><br>
    <input type="tel" id="user_phone" name="phone" required><br><br>

    <label for="user_national_id">National ID:</label><br>
    <input type="text" id="user_national_id" name="national_id" pattern="\d{10}" required><br><br>

    <hr>

    <!-- Company Information Section -->
    <h2>Company Information</h2>
    <label for="company_name">Company Name:</label><br>
    <input type="text" id="company_name" name="company_name" required><br><br>

    <label for="company_domain_url">Domain URL:</label><br>
    <input type="url" id="company_domain_url" name="domain_url" required><br><br>

    <label for="company_slogan">Slogan:</label><br>
    <input type="text" id="company_slogan" name="slogan"><br><br>

    <label for="company_logo_url">Logo URL:</label><br>
    <input type="url" id="company_logo_url" name="logo_url"><br><br>

    <hr>

    <!-- Theme Settings Section -->
    <h2>Theme Settings</h2>
    <label for="backgroundColor1">Background Color 1 (Hex code):</label><br>
    <input type="color" id="backgroundColor1" name="backgroundColor1" value="#ffffff"><br><br>

    <label for="backgroundColor2">Background Color 2 (Hex code):</label><br>
    <input type="color" id="backgroundColor2" name="backgroundColor2" value="#000000"><br><br>

    <label for="textColor">Text Color (Hex code):</label><br>
    <input type="color" id="textColor" name="textColor" value="#000000"><br><br>

    <hr>

    <!-- Submit Button for All Sections -->
    <button type="submit">Submit All Information</button>
  </form>

</body>
</html>
