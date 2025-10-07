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
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$token = $_POST['token']; 

if ($username == 'Tan' && $password == '106212885') {
    $_SESSION['user'] = $username;
    header('Location:welcome.php');
} else {
    echo "Invalid login. <a href = 'login.html'>Try again</a>";
}
?>
</body>
</html>