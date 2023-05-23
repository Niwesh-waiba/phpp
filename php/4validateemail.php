
<?php
function validateEmail($email) {
    // Validate email address
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true; // Valid email
    } else {
        return false; // Invalid email
    }
}

// Example usage
$email = "example@example.com";

if (validateEmail($email)) {
    echo "Success: Valid email address.";
} else {
    echo "Error: Invalid email address.";
}
?>
