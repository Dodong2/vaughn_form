<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'students_db');

$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if ($conn->connect_error) {
    die("Connection Error" . $conn->connect_error);
}

if(isset($_POST['create'])) {
    $student_name = $_POST['student_name'];
    $student_email = $_POST['student_email'];
    $student_gender = $_POST['student_gender'];
    $student_age = $_POST['student_age'];
    $student_course = $_POST['student_course'];
}

if (empty($student_name) || empty($student_email) || empty($student_gender) || empty($student_age) || empty($student_course)) {
    // echo 'student_name, student_email, student_gender, student_age, student_course, and time cannot be empty';
} else {

//Insert method par
    $stmt = $conn->prepare('INSERT INTO students (student_name, student_email, student_gender, student_age, student_course) VALUES (?,?,?,?,?)');
    if ($stmt === false) {
        // Output error para kung mali yung mga variables sa error
        die('Prepare() failed: ' . htmlspecialchars($conn->error));
    }
//para secure sa SQL attacks
    $stmt->bind_param('sssis', $student_name, $student_email, $student_gender, $student_age, $student_course);

//Validate if succes na pumasok sa database
    if ($stmt->execute()) {
        echo '<script>alert("Succesful nag create par!")</script>';
        echo '<script>window.location.href = "/Vaughn Form/vaughn_form.html"</script>';
    } else {
        echo 'ERROR Insert' . $stmt . "<br>" > $conn->error;
    }
    $stmt->close();
}


?>