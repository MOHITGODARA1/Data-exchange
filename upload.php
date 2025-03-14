<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
        $allowed = ['jpg', 'jpeg', 'png', 'gif', 'pdf', 'csv'];
        $file_name = $_FILES['file']['name'];
        $file_size = $_FILES['file']['size'];
        $file_tmp = $_FILES['file']['tmp_name'];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        if (in_array($file_ext, $allowed)) {
            if ($file_size <= 5 * 1024 * 1024) { // 5MB limit
                $upload_dir = 'uploads/';
                if (!is_dir($upload_dir)) {
                    mkdir($upload_dir, 0777, true);
                }
                $file_path = $upload_dir . basename($file_name);
                if (move_uploaded_file($file_tmp, $file_path)) {
                    echo 'File uploaded successfully!';
                } else {
                    echo 'Failed to move uploaded file.';
                }
            } else {
                echo 'File size exceeds 5MB limit.';
            }
        } else {
            echo 'Invalid file type.';
        }
    } else {
        echo 'No file uploaded or upload error.';
    }
} else {
    echo 'Invalid request method.';
}
?>