<?php 

require_once  '../include/db.php';

$Number_zcht_id = $_GET['id'];


mysqli_query($link,"DELETE FROM `student` WHERE `student`.`Number_zcht` = $Number_zcht_id");

header("Location:/Test.php");
?>