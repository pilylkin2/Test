<?php
include "include/db.php";

	$result = mysqli_query($link, "SELECT * FROM `student`");//Запрос к базе данных

	//$goods =  mysqli_fetch_assoc($result); //Данные из запросы помещаются в массив

	//print_r($goods); //Функция вывода строки из массива

	//вывод в цикле всех записей из массива 
	while ($goods =  mysqli_fetch_assoc($result)) 
	{

		echo "|".$goods['Name'];
		echo "|".$goods['Adress'];
		echo "|".$goods['Phone'];
		echo "|".$goods['Number_zcht'];
		echo "|".$goods['Academic_perfomance']."|";
		echo "<br>";	// code...
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Студент</title>
</head>
<body>
	<h1> Текст <?php echo "$login"; ?> </h1>
	<h2> Вы подключились к БД - <?php echo "$name_db" ; ?></h2>
</body>
</html>