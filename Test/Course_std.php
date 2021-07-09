<?php
include "include/db.php";

$result = mysqli_query($link, "SELECT * FROM `course_std1`");

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Course_std</title>
	<link rel="stylesheet" type="text/css" href="../css/Test.css">
	<link rel="stylesheet" type="text/css" href="../css/Window2.css">
	<link rel="stylesheet" type="text/css" href="../css/Window.css">
</head>
<body>
	<div class="alif">
		<p>
			<a href="Test.php" class="alif">Student</a>
			<a href="Course_std.php" class="alif">Course_student</a>
			<a href="course.php" class="alif" >Course</a>
			<a href="Course_professor.php" class="alif" >Course_professor</a>
			<a href="Professor.php" class="alif" >Professor</a>
		</p>
	</div>
	<hr>
	<div class="table">
		<table>
			<tr>
				<td>Номер зачетки</td>	 <!-- ПЕРЕДАЕМ ПЕРЕМЕННУЮ $name из класса Course -->	
				<td> Номер курса </td>		
			</tr>
			<?php while ($goods =  mysqli_fetch_assoc($result)) {
				?>
				<tr>
					<td> <?php echo $goods['Number_zcht']; ?> </td>	 <!-- ПЕРЕДАЕМ ПЕРЕМЕННУЮ $name из класса Course -->
					<td> <?php echo $goods['Number_course']; ?> </td>	<!-- Передвем переменную $nober из класса Сourse-->
				</tr>
				<?php 
			}?>

		</table>
	</div>
	<div>
		<a class="alif" href="1.xlsx"> Download table</a>
	</div>
	
</body>
</html>