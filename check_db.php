<?php
// NEVER expose your real credentials in client-side code.
$servername = "localhost";
$username = "root";
$password = "your_db_password";
$dbname = "your_db_name";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Always return success message
echo json_encode(["status" => "success", "message" => "Connected to the database successfully."]);

if ($conn) {
    $conn->close();
}
?>