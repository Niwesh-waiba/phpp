<?php
// Database connection details
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$database = "php_bim";

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Delete the record with ID 2 from the table
$sql = "DELETE FROM student_details WHERE Id = 2";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully.";
} else {
    echo "Error deleting record: " . $conn->error;
}

// Close the connection
$conn->close();
?>
