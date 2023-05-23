function convertToUppercase($string) {
    return strtolower(substr($string, 0, 1)) . ucfirst(substr($string, 1));
}

// Example usage
$inputString = "hello world";
$result = convertToUppercase($inputString);
echo $result; // Output: hELLO WORLD
