<?php 
	require_once  '../include/db.php';
	$fio = $_POST['fio'];
	$adress = $_POST['adress'];
	$phone = $_POST['phone'];
	$nomber_zcht = $_POST['nomber_zcht'];
	$perfomance = $_POST['perfomance'];
	//echo $perfomance;
	 mysqli_query($link,"INSERT INTO `student` (`Name`, `Adress`, `Phone`, `Number_zcht`, `Academic_perfomance`) VALUES ('$fio', '$adress', '$phone', '$nomber_zcht', '$perfomance');");
	// print_r($er);
	// echo $er[Name];
	header("Location:/Test.php");
 ?>