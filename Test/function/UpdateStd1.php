<?php 
	require_once  '../include/db.php';
	$id = $_POST['id'];
	$fio = $_POST['fio'];
	$adress = $_POST['adress'];
	$phone = $_POST['phone'];
	$nomber_zcht = $_POST['nomber_zcht'];
	$perfomance = $_POST['perfomance'];

	mysqli_query($link,"UPDATE `student` SET `Name` = '$fio', `Adress` = '$adress', `Phone` = '$phone', `Number_zcht` = '$nomber_zcht', `Academic_perfomance` = '$perfomance' WHERE `student`.`Number_zcht` = $id");

	header("Location:/Test.php");
 ?>