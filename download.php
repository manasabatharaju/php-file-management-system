<?php
// Database connection details (MATCH MYSQL SETTINGS)

$conn = new mysqli(
    "127.0.0.1",   // force TCP
    "root",        // MySQL user
    "",            // EMPTY password
    "fileuploaddownload",
    3308           // MySQL port
);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch uploaded files
$sql = "SELECT * FROM files";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Uploaded Files</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2>Uploaded Files</h2>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>File Name</th>
                <th>File Size</th>
                <th>File Type</th>
                <th>Download</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $file_path = "uploads/" . htmlspecialchars($row['filename']);
            ?>
            <tr>
                <td><?php echo htmlspecialchars($row['filename']); ?></td>
                <td><?php echo $row['filesize']; ?> bytes</td>
                <td><?php echo htmlspecialchars($row['filetype']); ?></td>
                <td>
                    <a href="<?php echo $file_path; ?>" class="btn btn-primary" download>
                        Download
                    </a>
                </td>
            </tr>
            <?php
                }
            } else {
            ?>
            <tr>
                <td colspan="4">No files uploaded yet.</td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>

<?php
$conn->close();
?>
