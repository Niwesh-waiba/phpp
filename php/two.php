<?php
session_start(); // Start the session

// Retrieve the name from the session variable
$name = $_SESSION['user_name'];

// Clear the session variable
unset($_SESSION['user_name']);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Page Two</title>
</head>
<body>
    <h2>Page Two</h2>
    <p>Welcome, <?php echo $name; ?>!</p>
</body>
</html>
