<html>
<header>
<title>Stud-Data.com</title>
<link rel="stylesheet" href="studStyle.css" type="text/css"/>
</header>
<body style="background-color:gray">
<?php
?php
$servername = 'localhost';
$user = 'root';
$password = "";
$dbname = "student";

try{
	$db = mysqli_connect($servername,$user,$password,$dbname);
}catch(MySqli_Sql_Exception $e){
}

	if(isset($_POST['DataBase']))
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
	
	$sql = "INSERT INTO student(student_id,student_FN,student_LN,student_ON,DOB,student_email,student_contact,student_course,student_sex,marital_status,guardian_name,guardian_contact,student_resident,admission_type,student_status)
	VALUES('$student_id','$student_FN','$student_LN','$student_ON','$DOB','$student_email','$student_contact','$student_course','$student_sex','$marital_status','$guardian_name','$guardian_contact','$student_resident','$admission_type','$student_status')";
	mysqli_query($db,$sql);
	
	
	
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
<h1>Add Students</h1>
<form action="AddStudent.php" method="post">
		<table>
			<tr>
				<td><label for="student_id">Student ID:</label></td>
				<td><input type='text' name="student_id" /></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td><label for="student_FN">Student First name:</label></td>
				<td><input type='text' name="student_FN" /></td>
				<td></td>
				<td></td>
				<td><label for="student_LN">Student Last name:</label></td>
				<td><input type='text' name="student_lN" /></td>
			</tr>
			<tr>
				<td><label for="student_ON">Student Other name:</label></td>
				<td><input type='text' name="student_ON" /></td>
				<td></td>
				<td></td>
				<td><label for="admission_type">Admission Type:</label></td>
				<td>
					<select class="select">
						<option>UNDERGRAD</option>
						<option>GRADUATE</option>
					</select>
				</td>
			</tr>
			<tr>
				<td><label for="DOB">Date Of Birth:</label></td>
				<td><input type='date' name="DOB" /></td>
				<td></td>
				<td></td>
				<td><label for="student_email">Email:</label></td>
				<td><input type='text' name="student_email" /></td>
			</tr>
			<tr>
				<td><label for="student_contact">Student Contact:</label></td>
				<td><input type='text' name="student_contact" /></td>
				<td></td>
				<td></td>
				<td><label for="student_course">Course:</label></td>
				<td><input type='text' name="student_course" /></td>
			</tr>
			<tr>
				<td><label for="student_sex">Sex:</label></td>
				<td>
					<select class="select">
						<option>Male</option>
						<option>Female</option>
					</select>
				</td>
				<td></td>
				<td></td>
				<td><label for="marital_status">Marital status:</label></td>
				<td>
					<select class="select">
						<option>Single</option>
						<option>Married</option>
						<option>Divorced</option>
						<option>Complicated</option>
					</select>
				</td>
			</tr>
			<tr>
				<td><label for="guardian_name">Guardian name:</label></td>
				<td><input type='text' name="guardian_name" /></td>
				<td></td>
				<td></td>
				<td><label for="guardian_contact">Guardian contact:</label></td>
				<td><input type='text' name="guardian_contact" /></td>
			</tr>
			<tr>
				<td><label for="student_resident">Student Resident:</label></td>
				<td><input type='text' name="student_resident" /></td>
				<td><label for="student_status">Student Status:</label></td>
				<td>
					<select class="select">
						<option>MAIN CAMPUS</option>
						<option>CITY</option>
						<option>DISTANT</option>
					</select>
				</td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td><input type="submit" name="DataBase" value="Add Student" /></td>
			</tr>
		</table>
	</form>
</body>
<footer id="footer"><marquee>
<p>Stud-Data.com</p></marquee>
</footer>
</html>