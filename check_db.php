<?php
// NEVER expose your real credentials in client-side code.
$servername = "localhost";
$username = "root";
$password = "your_db_password";
$dbname = "your_db_name";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    // Return a JSON response indicating failure
    echo json_encode(["status" => "error", "message" => "Connection failed: " . $conn->connect_error]);
} else {
    // Return a JSON response indicating success
    echo json_encode(["status" => "success", "message" => "Connected to the database successfully."]);
}

$conn->close();
?>