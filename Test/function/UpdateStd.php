<?php 

require_once  '../include/db.php';
$Number_zcht_id = $_GET['id'];
//echo $Number_zcht_id;

$Number = mysqli_query($link,"SELECT * FROM `student` WHERE Number_zcht = '$Number_zcht_id';");
$Number = mysqli_fetch_assoc($Number);
//echo $Number;
//print_r($Number);
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<!-- <link rel="stylesheet" type="text/css" href="../css/Window2.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="../css/Test.css"> -->
	<link rel="stylesheet" type="text/css" href="../css/Update.css">

	<title></title>
</head>
<body>
	<form action="UpdateStd1.php" method="post">
		<div id="dark1"> <!--Всплывающее окно Update-->
			<div id="okno1">
				<input type="hidden" name="id" value="<?=$Number['Number_zcht'];  ?>">
				<a>  ФИО студента</a><br>
				<input type="text" name="fio" value="<?=$Number['Name']; ?>"><br>
				<a>  Адрес проживания</a><br>
				<input type="" name="adress" value="<?=$Number['Adress']; ?>"><br>
				<a>  Номер телефона</a><br>
				<input type="" name="phone" value="<?=$Number['Phone']; ?>"><br>
				<a>  Номер зачетки</a><br>
				<input type="" name="nomber_zcht" value="<?=$Number['Number_zcht']; ?>"><br>
				<a>  Успеваемость </a><br>
				<input type="" name="perfomance" value="<?=$Number['Academic_perfomance']; ?>"><br>
				<button type="sumbit">Изменить</button>
			</div>
		</div>
	</form>
</body>
</html>