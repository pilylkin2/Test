<?php 
	require_once  '../include/db.php';
	$id = $_POST['id'];
	$fio = $_POST['fio'];
	$adress = $_POST['adress'];
	$phone = $_POST['phone'];
	$salary = $_POST['salary'];

	mysqli_query($link,"UPDATE `professor` SET `Name` = '$fio', `Adress` = '$adress', `Phone` = '$phone', `Salary` = '$salary' WHERE `professor`.`Name` = '$id'");

	header("Location:/Professor.php");
 ?>