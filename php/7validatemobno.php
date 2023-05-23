<?php
function validateMobileNumber($number) {
    // Check if the number starts with "9841"
    if (substr($number, 0, 4) === "9841") {
        return true; // Valid mobile number
    } else {
        return false; // Invalid mobile number
    }
}

// Example usage
$mobileNumber = "9841234567";

if (validateMobileNumber($mobileNumber)) {
    echo "Success: Valid mobile number.";
} else {
    echo "Error: Invalid mobile number.";
}
?>
