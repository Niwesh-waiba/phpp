<?php
// Data to be stored in the JSON file
$data = array(
    'name' => 'John Doe',
    'age' => 30,
    'email' => 'johndoe@example.com'
);

// Encode the data as JSON
$jsonData = json_encode($data);

// Write the JSON data to a file
$file = 'data.json';
file_put_contents($file, $jsonData);

// Read the JSON file
$jsonString = file_get_contents($file);

// Decode the JSON data
$decodedData = json_decode($jsonString, true);

// Display the decoded data
var_dump($decodedData);
?>
