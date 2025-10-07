<!DOCTYPE html>
<html lang="en">
<head>
    <!-- meta here -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>
</head>
<body>
    
<?php
    include_once ("header.inc"); 
?>

<form method="post" action="process.php">
    <label for="username">Username:</label>
    <input type="text" name="username" required><br>

    <label for="password">Password:</label>
    <input type="password" name="password" required><br>

    <input type="hidden" name="token" value="t106212885">
    <input type="submit" value="Login">
</form>

<?php
    include_once ("footer.inc"); 
?>

</body>
</html>
