<?php 
require_once  '../include/db.php';
$Number_course_id = $_GET['id'];


mysqli_query($link,"DELETE FROM `course` WHERE  `course`.`Number_course` = $Number_course_id");

	header("Location:/course.php");
 ?>