<?php
// Enable error reporting during development
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Set response type for JSON
header('Content-Type: application/json');

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mohit";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    echo json_encode(['status' => 'error', 'message' => 'Connection failed: ' . $conn->connect_error]);
    exit;
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $dataName = trim($_POST["data_name"]);
    $description = trim($_POST["description"]);
    $category = trim($_POST["category"]);

    // Handle file upload
    if (isset($_FILES["file"]) && $_FILES["file"]["error"] == 0) {
        $uploadDir = "uploads/";
        $originalName = basename($_FILES["file"]["name"]);

        // Sanitize filename
        $safeName = preg_replace("/[^A-Za-z0-9_\-\.]/", "_", $originalName);

        // Add unique timestamp to prevent overwrite
        $uniqueName = time() . "_" . $safeName;
        $filePath = $uploadDir . $uniqueName;

        // Check allowed file types
        $allowedTypes = ['pdf', 'jpg', 'jpeg', 'png', 'doc', 'docx', 'txt'];
        $fileExt = strtolower(pathinfo($safeName, PATHINFO_EXTENSION));

        if (!in_array($fileExt, $allowedTypes)) {
            echo json_encode(['status' => 'error', 'message' => 'Unsupported file type.']);
            exit;
        }

        // Create the upload directory if it doesn't exist
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        // Move uploaded file
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $filePath)) {
            // Insert data into database
            $stmt = $conn->prepare("INSERT INTO uploads (data_name, description, category, file_path) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $dataName, $description, $category, $filePath);

            if ($stmt->execute()) {
                echo json_encode(['status' => 'success', 'message' => 'File uploaded and information saved successfully!']);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Error saving information: ' . $stmt->error]);
            }

            $stmt->close();
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Error uploading the file.']);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'No file uploaded or an error occurred.']);
    }
}

$conn->close();
?>