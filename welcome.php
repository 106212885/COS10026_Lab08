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

<?php
session_start();
if (isset($_SESSION['user'])) {
    echo "Welcome," .$_SESSION['user'];
} else {
    header('Location:login.html');
}
?>

<?php
    include_once ("footer.inc"); 
?>

</body>
</html>