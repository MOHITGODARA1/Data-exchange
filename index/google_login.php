<?php
// filepath: d:\FULL stack\htdocs\Class project\index\google_login.php
session_start(); // Start the session

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
if (isset($data['id']) && isset($data['name']) && isset($data['email'])) {
    $id = $conn->real_escape_string($data['id']);
    $name = $conn->real_escape_string($data['name']);
    $email = $conn->real_escape_string($data['email']);
    $image = isset($data['image']) ? $conn->real_escape_string($data['image']) : '';

    // Check if the user already exists
    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        // User exists, update their information
        $updateQuery = "UPDATE users SET name = '$name', image = '$image' WHERE email = '$email'";
        $conn->query($updateQuery);
    } else {
        // Insert new user
        $insertQuery = "INSERT INTO users (id, name, email, image) VALUES ('$id', '$name', '$email', '$image')";
        $conn->query($insertQuery);
    }

    // Store the user's email in the session
    $_SESSION['user_email'] = $email;

    echo json_encode(['status' => 'success', 'message' => 'Google login successful.']);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid input.']);
}

$conn->close();
?>