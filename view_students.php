<?php
require './submit_form.php'; // Ensure $conn is correctly initialized

// Check if the connection is valid
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM students ORDER BY id DESC";
$result = $conn->query($sql);

// Check if the query was successful
if (!$result) {
    die("Error executing query: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css" />
    <title>View Students</title>
</head>
<body>
<div class="return"><button><a href="./vaughn_form.html">back</a></button></div>
    <div class="table-containers">
    <?php if ($result->num_rows > 0): ?>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Age</th>
            <th>Course</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['student_name']; ?></td>
            <td><?php echo $row['student_email']; ?></td>
            <td><?php echo $row['student_gender']; ?></td>
            <td><?php echo $row['student_age']; ?></td>
            <td><?php echo $row['student_course']; ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
    <?php else: ?>
    <p>No results found</p>
    <?php endif; ?>

    <?php $conn->close(); ?>
    </div>
</body>
</html>
