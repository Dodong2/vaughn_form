<?php
// including the database connection file
require "./submit_form.php";

$success_mess = false;

if(isset($_POST['update']))
{ 

 $id = mysqli_real_escape_string($conn, $_POST['id']);
 $name = mysqli_real_escape_string($conn, $_POST['student_name']);
 $email = mysqli_real_escape_string($conn, $_POST['student_email']); 
 $gender = mysqli_real_escape_string($conn, $_POST['student_gender']); 
 $age = mysqli_real_escape_string($conn, $_POST['student_age']);
 $course = mysqli_real_escape_string($conn, $_POST['student_course']);
 
 // checking empty fields
 if(empty($name) || empty($email) || empty($gender) || empty($age) || empty($course)) { 
 
if(empty($name)) {
 echo "<font color='red'>Name field is empty.</font><br/>";
 }

 if(empty($email)) {
    echo "<font color='red'>Email field is empty.</font><br/>";
    }
 
 if(empty($age)) {
 echo "<font color='red'>Age field is empty.</font><br/>";
 }

 if(empty($gender)) {
    echo "<font color='red'>gender field is empty.</font><br/>";
    }
 
 if(empty($course)) {
    echo "<font color='red'>course field is empty.</font><br/>";
    }
 
 } else { 
 //updating the table
 $result = mysqli_query($conn, "UPDATE students SET student_name='$name', student_email='$email', student_gender='$gender', student_age='$age', student_course='$course' WHERE id=$id");
 
 //redirectig to the display page. In our case, it is index.php
 if ($result) {
    $success_mess = true;
    header("Location: view_students.php");
 }

 }
}
?>


<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($conn, "SELECT * FROM students WHERE id=$id");

if($res = mysqli_fetch_array($result))
{
 $name = $res['student_name'];
 $email = $res['student_email'];
 $gender = $res['student_gender'];
 $age = $res['student_age'];
 $course = $res['student_course'];
}
?>

<html>
<head> 
 <title>Edit Data</title>
</head>

<body>
 <a href="./view_students.php">Home</a>
 <br/><br/>
 
 <form name="form1" method="post" action="update.php" onsubmit=" return updateConfirm()">
 <table border="0">
 <tr> 
 <td>Name</td>
 <td><input type="text" name="student_name" value="<?php echo $name;?>"></td>
 </tr>
 <tr> 
 <td>Email</td>
 <td><input type="text" name="student_email" value="<?php echo $email;?>"></td>
 </tr>
 <tr> 
 <td>Gender</td>
 <td><input type="text" name="student_gender" value="<?php echo $gender;?>"></td>
 </tr>
 <tr> 
 <td>Age</td>
 <td><input type="text" name="student_age" value="<?php echo $age;?>"></td>
 </tr>
 <tr> 
 <td>Course</td>
 <td><input type="text" name="student_course" value="<?php echo $course;?>"></td>
 </tr>
 <tr>
 <td><input type="hidden" name="id" value=<?php echo $id;?>></td>
 <td><input type="submit" name="update" value="Update"></td>
 </tr>
 </table>
 </form>
</body>
    <script>
        function updateConfirm() {
            const confirmations = confirm('aren you sure you want to update?')
            if(confirmations) {
                alert('Successfully Update')
                return true
            }
            return false 
        }
    </script>

</html>