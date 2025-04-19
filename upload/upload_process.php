<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uploddata";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    echo json_encode(['status' => 'error', 'message' => 'Database connection failed: ' . $conn->connect_error]);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    $name = $conn->real_escape_string($_POST['name']);
    $description = $conn->real_escape_string($_POST['description']);
    $category = $conn->real_escape_string($_POST['category']);

    if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['file']['tmp_name'];
        $fileName = $_FILES['file']['name'];
        $fileSize = $_FILES['file']['size'];
        $fileType = $_FILES['file']['type'];
        $uploadDir = 'uploads/';
        $filePath = $uploadDir . basename($fileName);

        $allowedExtensions = ['pdf', 'xls', 'xlsx'];
        $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);

        if (!in_array(strtolower($fileExtension), $allowedExtensions)) {
            echo json_encode(['status' => 'error', 'message' => 'Invalid file type. Only PDF and Excel files are allowed.']);
            exit;
        }
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        if (move_uploaded_file($fileTmpPath, $filePath)) {
            $query = "INSERT INTO uploads (name, description, category, file_name, file_path, file_size, file_type) 
                      VALUES ('$name', '$description', '$category', '$fileName', '$filePath', '$fileSize', '$fileType')";

            if ($conn->query($query)) {
                echo json_encode(['status' => 'success', 'message' => 'File uploaded successfully!']);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Error saving data: ' . $conn->error]);
            }
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Error moving the uploaded file.']);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'No file uploaded or there was an error during the upload.']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
}

$conn->close();
?>