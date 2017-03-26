<?php
//require db
require_once('dbconnect.php');

if($_SERVER["REQUEST_METHOD"] ==  "POST")
{
	$coursename = $_POST['cname'];
	$coursecode = $_POST['ccode'];
	$ects = $_POST['ects'];
	
	$teacher = mysql_real_escape_string($_POST['myselectbox']);
	 
$query =  mysqli_query($conn, "INSERT INTO course (teacher,cname,ccode,ects) VALUES('$teacher','$coursename','$coursecode','$ects')");
if($query)
	//header('Location: http://www.google.com');
	echo "<font color='green'><br>Course Added  with Success</font>";
else
	echo "<font color='red'><br>Input Failed</font>";

}



?>