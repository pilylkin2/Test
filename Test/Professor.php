<?php
include "include/db.php";

$result = mysqli_query($link, "SELECT * FROM `professor`");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Professor</title>
	<link rel="stylesheet" type="text/css" href="../css/Test.css">
	<link rel="stylesheet" type="text/css" href="../css/Window.css">
</head>
<body>
	<form> 
		<div class="alif">
			<p>
				<a href="Test.php" class="alif" >Student</a>
				<a href="Course_std.php" class="alif">Course_student</a>
				<a href="course.php" class="alif ">Course</a>
				<a href="Course_professor.php" class="alif" >Course_professor</a>
				<a href="Professor.php" class="alif">Professor</a>
			</p>
		</div>
	</form>		
	<hr>
	<div class="table">
		<table>
			<tr>	
				<td> Фио преподавателя  </td>
				<td> Адресс </td>
				<td> Телефон </td>
				<td> Оплата </td>
				<td></td>
				<td></td>
			</tr>
			<?php while ($goods =  mysqli_fetch_assoc($result)) {
				?>
				<tr>
					<td> <?php echo $goods['Name']; ?> </td>	
					<td> <?php echo $goods['Adress']; ?> </td>	
					<td> <?php echo $goods['Phone']; ?> </td>
					<td> <?php echo $goods['Salary']; ?> </td>
					<td> <a href="function/UpdateProf.php?id=<?= $goods['Name']; ?>" >Изменить</a></td>
					<td> <a href="function/deleteProf.php?id=<?= $goods['Name']; ?>" >Удалить</a></td>
				</tr>
				<?php 
			}?>
		</table>
	</div>
	<div> <!-- Всплывающие окна -->
		<form action="function/createProf.php" method="post">
			<div id="dark"> <!--Всплывающее окно create-->
				<div id="okno">
					Создание данных<br>
					<a> Введите ФИО профессора</a>
					<input type="text" name="fio"><br><br>
					<a> Введите адрес проживания</a><br>
					<input type="text" name="adress"><br><br>
					<a> Введите номер телефона</a><br>
					<input type="text" name="phone"><br><br>
					<a> Введите оплату</a><br>
					<input name="salary"><br>
					<a href="#" class="close">Закрыть окно</a>
					<button type="sumbit">Создать</button>
				</div>
			</div>
		</form>
		<a href="#dark" class="alif" >Create</a>
		<a class="alif" href="1.xlsx"> Download table</a>
	</div>

</body>
</html>