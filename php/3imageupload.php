<?php
// Configuration
$allowedExtensions = array('jpg', 'jpeg', 'png'); // Allowed file extensions
$maxFileSize = 2 * 1024 * 1024; // Maximum file size (2MB)
$uploadDirectory = 'uploads/'; // Directory to store uploaded files

// Handle file upload
if (isset($_FILES['image'])) {
    $file = $_FILES['image'];

    // Check for errors
    if ($file['error'] === UPLOAD_ERR_OK) {
        // Check file extension
        $fileExtension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        if (!in_array($fileExtension, $allowedExtensions)) {
            echo 'Error: Invalid file extension. Allowed extensions: ' . implode(', ', $allowedExtensions);
            exit;
        }

        // Check file size
        if ($file['size'] > $maxFileSize) {
            echo 'Error: File size exceeds the limit of ' . $maxFileSize . ' bytes.';
            exit;
        }

        // Generate unique filename
        $uniqueFilename = uniqid() . '.' . $fileExtension;

        // Move uploaded file to destination directory
        if (move_uploaded_file($file['tmp_name'], $uploadDirectory . $uniqueFilename)) {
            echo 'File uploaded successfully. Filename: ' . $uniqueFilename;
        } else {
            echo 'Error: Failed to move the uploaded file.';
        }
    } else {
        echo 'Error: File upload failed with error code ' . $file['error'];
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Image Upload</title>
</head>
<body>
    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="image" accept="image/*" required>
        <input type="submit" value="Upload">
    </form>
</body>
</html>
