<?php
// Table data
$tableData = array(
    array("S.N", "Name", "Email", "Address", "Phone"),
    array("1.", "User One", "userone@gmail.com", "Kathmandu", "9999999999"),
    array("2.", "User Two", "usertwo@gmail.com", "Lalitpur", "8888888888")
);

// Function to print the table
function printTable($data) {
    echo "<table>";
    foreach ($data as $row) {
        echo "<tr>";
        foreach ($row as $cell) {
            echo "<td>$cell</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

// Example usage
printTable($tableData);
?>
