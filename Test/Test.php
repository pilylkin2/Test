<?php
include "include/db.php";

	$result = mysqli_query($link, "SELECT * FROM `student`");//Запрос к базе данных
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<title>Student</title>
		<link rel="stylesheet" type="text/css" href="../css/Window.css">

		<link rel="stylesheet" type="text/css" href="../css/Test.css">
	</head>
	<body>
		<form> 
			<div class="alif">
				<a href="Test.php" class="alif">Student</a>
				<a href="Course_std.php" class="alif">Course_student</a>
				<a href="course.php" class="alif" >Course</a>
				<a href="Course_professor.php" class="alif">Course_professor</a>
				<a href="Professor.php" class="alif">Professor</a>
			</div>
		</form>	
		<hr>
		<div class="table">
			<table>
				<tr>
					<td>Фамилия Имя Отчество</td>	 <!-- ПЕРЕДАЕМ ПЕРЕМЕННУЮ $name из класса Course -->
					<td>Адрес проживания</td>	<!-- Передвем переменную $nober из класса Сourse-->
					<td> Номер телефона </td>	<!-- Передвем переменную $salary из класса Сourse-->
					<td> Номер зачетки </td>	
					<td> Средняя успеваемость </td>	
					<td></td>	
					<td></td>
				</tr>
				<?php while ($goods =  mysqli_fetch_assoc($result)) {
					?>
					<tr>
						<td> <?php echo $goods['Name']; ?> </td>	 
						<td> <?php echo $goods['Adress']; ?> </td>	
						<td> <?php echo $goods['Phone']; ?> </td>	
						<td> <?php echo $goods['Number_zcht']; ?> </td>
						<td> <?php echo $goods['Academic_perfomance']; ?> </td>	
						<td> <a href="function/UpdateStd.php?id=<?= $goods['Number_zcht']; ?>" >Изменить</a></td>
						<td> <a style="color: black;" href="function/delete.php?id=<?= $goods['Number_zcht']; ?>" >Удалить</a></td>
					</tr>
					<?php
				} ?>
			</table>
		</div>
		<div> <!-- Всплывающие окна -->
			<form action="function/createSTD.php" method="post">
				<div id="dark"> <!--Всплывающее окно create-->
					<div id="okno">
						Создание данных<br>
						<a> Введите ФИО студента</a>
						<input type="text" name="fio" ><br>
						<a> Введите адрес проживания</a><br>
						<input type="text" name="adress"><br>
						<a> Введите номер телефона</a><br>
						<input type="text" name="phone"><br>
						<a> Введите номер зачетки</a><br>
						<input type="nomber" name="nomber_zcht"><br>
						<a> Введите успеваемость </a><br>
						<input name="perfomance"><br>
						<a href="#" class="close">Закрыть окно</a>
						<button type="sumbit">Добавить</button>
					</div>
				</div>
			</form>
			<a href="#dark" class="alif" >Create</a>
			<a class="alif" href="1.xlsx"> Download table</a>
		</div>
		
	</div>
</body>
</html>