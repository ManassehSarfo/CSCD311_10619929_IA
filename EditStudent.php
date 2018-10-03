<html>
<header>
<title>Stud-Data.com</title>
<link rel="stylesheet" href="studStyle.css" type="text/css"/>
</header>
<body style="background-color:gray">
<?php
$servername = 'localhost';
$user = 'root';
$password = "";
$db = "student";

try{
	$db = mysqli_connect($servername,$user,$password,$db);
}catch(MySqli_Sql_Exception $e){
}

	if(isset($_POST['register']))
	{
	$student_id = $_POST['student_id'];
	$student_FN = $_POST['student_FN'];
	$student_LN = $_POST['student_LN'];
	$student_ON = $_POST['student_ON'];
	$DOB = $_POST['DOB'];
	$student_email = $_POST['student_email'];
	$student_contact = $_POST['student_contact'];
	$student_course = $_POST['student_course'];
	$student_sex = $_POST['student_sex'];
	$marital_status = $_POST['marital_status'];
	$guardian_name = $_POST['guardian_name'];
	$guardian_contact = $_POST['guardian_contact'];
	$student_resident = $_POST['student_resident'];
	$admission_type = $_POST['admission_type'];
	$student_status = $_POST['student_status'];
	

	}
	
?>
<h1 style="background-color:black; color:white;">Stud-Data.com</h1>
<div id="menu" style="background-color:white; width:25%;">
<p id="options" align="right">
<a href="AddStudent.php" class="options">Add Student</a>
<a href="EditStudent.php" class="options">Edit Students</a>
<a href="viewStudents.php" class="options">View Students</a>
</p>

	<image src="img/dog.jpg" width="80%" height="45%" id="profilePic"/>
</div>
<h1>Edit Student Details</h1>
</body>
<footer id="footer"><marquee>
<p>Stud-Data.com</p></marquee>
</footer>
</html>