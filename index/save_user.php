<?php
// filepath: d:\FULL stack\htdocs\Class project\index\save_user.php

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userinformation"; // Replace with your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die(json_encode(['status' => 'error', 'message' => 'Database connection failed: ' . $conn->connect_error]));
}

// Get JSON input
$data = json_decode(file_get_contents('php://input'), true);

// Validate input
if (isset($data['name']) && isset($data['email']) && isset($data['password'])) {
    $name = $conn->real_escape_string($data['name']);
    $email = $conn->real_escape_string($data['email']);
    $password = password_hash($conn->real_escape_string($data['password']), PASSWORD_BCRYPT); // Hash the password

    // Check if the email already exists
    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        echo json_encode(['status' => 'error', 'message' => 'Email already exists.']);
    } else {
        // Insert new user
        $insertQuery = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
        if ($conn->query($insertQuery)) {
            echo json_encode(['status' => 'success', 'message' => 'User registered successfully.']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Failed to register user.']);
        }
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid input.']);
}

$conn->close();
?>