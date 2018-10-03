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

if(!@mysqli_connect($servername,$user,$password))
{
	die('Cannot connect');
}
else{
	if(@mysql_select_db('student'))
	{
	echo ' Connection success';	
	}
	else{
		die('Cannot connect to database');
	}
}

$query = "SELECT * FROM 'student'";
if($is_query_run=mysql_query($query))
{
	echo "query executed";
	while())
	{
		echo '<tr><td>'.$query_execute['student_id'].'</td><td>'.$query_execute['student_FN'].'</td><td>'.$query_execute['student_LN'].'</td><td>'.$query_execute['student_email'].'</td><td>'.$query_execute['student_sex'].'</td></tr>'
		//echo $query_execute[Name].'<br>';
	}
}else{
	echo "query not executed"; 
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
<h1>View Students in the Database</h1>
</body>
<footer id="footer"><marquee>
<p>Stud-Data.com</p></marquee>
</footer>
</html>