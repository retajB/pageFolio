<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Successful</title>
</head>
<body style="text-align: center; direction: ltr; font-family: sans-serif; padding-top: 50px;">
    <h2>Registration Successful 🎉</h2>
    <p>You will be redirected to the edit page shortly...</p>

    <script>
    setTimeout(function() {
        window.location.href = "{{ route('edit.page') }}";
    }, 3000);
</script>

</body>
</html>

