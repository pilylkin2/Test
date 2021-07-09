<?php 
	require_once  '../include/db.php';
	$fio = $_POST['fio'];
	$adress = $_POST['adress'];
	$phone = $_POST['phone'];
	$salary = $_POST['salary'];
	//echo $perfomance;
	 mysqli_query($link,"INSERT INTO `professor` (`Name`, `Adress`, `Phone`, `Salary`) VALUES ('$fio', '$adress', '$phone', '$salary');");
	// print_r($er);
	// echo $er[Name];
	header("Location:/Professor.php");
 ?>