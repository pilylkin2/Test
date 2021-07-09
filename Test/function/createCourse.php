<?php 
	require_once  '../include/db.php';
	$Name = $_POST['Name'];
	$Number = $_POST['Number'];
	$cost = $_POST['cost'];


	mysqli_query($link,"INSERT INTO `course` (`Name_course`, `Number_course`, `Cost`) VALUES ('$Name', '$Number', '$cost');");

	header("Location:/course.php");
 ?>