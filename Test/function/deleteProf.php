<?php 

require_once  '../include/db.php';

$Name_id = $_GET['id'];

mysqli_query($link,"DELETE FROM `professor` WHERE `professor`.`Name` = '$Name_id';");

	header("Location:/Professor.php");
?>