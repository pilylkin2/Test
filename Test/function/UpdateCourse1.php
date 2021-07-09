<?php 
	require_once  '../include/db.php';
	$id = $_POST['id'];
	$Name = $_POST['Name'];
	$Number = $_POST['Number'];
	$cost = $_POST['cost'];

	mysqli_query($link,"UPDATE `course` SET `Name_course` = '$Name', `Number_course` = '$Number', `Cost` = '$cost' WHERE `course`.`Name_course` = '$Name' AND `course`.`Number_course` = $id");

	header("Location:/course.php");
 ?>