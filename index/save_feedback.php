<?php
// filepath: d:\FULL stack\htdocs\Class project\index\save_feedback.php

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contactsave"; // Replace with your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    echo json_encode(['status' => 'error', 'message' => 'Database connection failed: ' . $conn->connect_error]);
    exit;
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullName = $conn->real_escape_string($_POST['fullName']);
    $email = $conn->real_escape_string($_POST['email']);
    $satisfaction = $conn->real_escape_string($_POST['satisfaction']);
    $message = $conn->real_escape_string($_POST['message']);

    // Insert feedback into the database
    $query = "INSERT INTO feedback (full_name, email, satisfaction, message) 
              VALUES ('$fullName', '$email', '$satisfaction', '$message')";

    if ($conn->query($query)) {
        echo json_encode(['status' => 'success', 'message' => 'Thank you for your feedback!']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Error saving feedback: ' . $conn->error]);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
}

$conn->close();
?>