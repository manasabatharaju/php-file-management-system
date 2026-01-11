<?php
$conn = new mysqli("127.0.0.1", "root", "", "fileuploaddownload", 3308);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "✅ Database connected successfully";
?>
