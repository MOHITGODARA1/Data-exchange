<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle file upload
    if (isset($_FILES["uploaded_file"]) && $_FILES["uploaded_file"]["error"] == 0) {
        $uploadDir = "uploads/";
        $uploadFile = $uploadDir . basename($_FILES["uploaded_file"]["name"]);

        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true); // Create the uploads directory if it doesn't exist
        }

        if (move_uploaded_file($_FILES["uploaded_file"]["tmp_name"], $uploadFile)) {
            echo "File uploaded successfully: " . htmlspecialchars($uploadFile) . "<br>";
        } else {
            echo "File upload failed.<br>";
        }
    }

    // Handle additional information
    $dataName = htmlspecialchars($_POST["data_name"]);
    $description = htmlspecialchars($_POST["description"]);
    $category = htmlspecialchars($_POST["category"]);

    echo "<h2>Additional Information</h2>";
    echo "Data Name: " . $dataName . "<br>";
    echo "Description: " . $description . "<br>";
    echo "Category: " . $category . "<br>";
}
?>