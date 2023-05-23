<?php
session_start(); // Start the session

// Check if the form is submitted
if (isset($_POST['submit'])) {
    $name = $_POST['name']; // Get the name from the form

    // Store the name in a session variable
    $_SESSION['user_name'] = $name;

    // Redirect to two.php
    header('Location: two.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Page One</title>
</head>
<body>
    <h2>Page One</h2>
    <form method="POST" action="">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
