<?php
include "include/db.php";

$result = mysqli_query($link, "SELECT * FROM `course`");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Course</title>
	<link rel="stylesheet" type="text/css" href="../css/Test.css">
	<link rel="stylesheet" type="text/css" href="../css/Course.css">
	<link rel="stylesheet" type="text/css" href="../css/Course1.css">
	<link rel="stylesheet" type="text/css" href="../css/Window2.css">
</head>
<body>
	<form> 
		<div class="alif">
			<p>
				<a href="Test.php" class="alif">Student</a>
				<a href="Course_std.php" class="alif">Course_student</a>
				<a href="course.php" class="alif">Course</a>
				<a href="Course_professor.php" class="alif" >Course_professor</a>
				<a href="Professor.php" class="alif" >Professor</a>
			</p>
		</div>
	</form>	
	<hr>
	<div class="table">
		<table>
			<tr>
				<td> Название курса </td>	 <!-- ПЕРЕДАЕМ ПЕРЕМЕННУЮ $name из класса Course -->
				<td> Номер курса </td>	<!-- Передвем переменную $nober из класса Сourse-->
				<td> Стоимость </td>	<!-- Передвем переменную $salary из класса Сourse-->
				<td></td>	
				<td></td>
			</tr>
			<?php while ($goods =  mysqli_fetch_assoc($result)) {
				?>
				<tr>
					<td> <?php echo $goods['Name_course']; ?> </td>	 
					<td> <?php echo $goods['Number_course']; ?> </td>	
					<td> <?php echo $goods['Cost']; ?> </td>	
					<td><a href="function/UpdateCourse.php?id=<?= $goods['Number_course']; ?>">Изменить</a></td>
					<td><a href="function/deleteCourse.php?id=<?= $goods['Number_course']; ?>">Удалить</a></td>
				</tr>
				<?php 
			}?>
		</table>
	</div>
	<div> <!-- Всплывающие окна --> 
		<form action="function/createCourse.php" method="post">	
			<div id="dark"> <!--Всплывающее окно create-->
				<div id="okno">
					Создание данных<br>
					<a> Введите название курса </a>
					<input type="text" name="Name"><br>
					<a> Введите номер курса</a><br>
					<input type="number" name="Number"><br>
					<a> Введите стоимость курса</a><br>
					<input name="cost"><br>
					<a href="#" class="close">Закрыть окно</a>
					<button type="sumbit">Добавить</button>
				</div>
			</div>
		</form>
		<a href="#dark" class="alif" >Create</a>
		<a class="alif" href="1.xlsx"> Download table</a>

	</div>
</body>
</html>