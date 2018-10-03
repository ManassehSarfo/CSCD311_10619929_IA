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



	
?>