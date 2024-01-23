<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "session_login";

$conn = new mysqli($host, $user, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();


?>
