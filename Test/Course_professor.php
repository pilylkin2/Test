<?php
include "include/db.php";

$result = mysqli_query($link, "SELECT * FROM `course_professor`");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Course_professor</title>
	<link rel="stylesheet" type="text/css" href="../css/Test.css">
	<style type="text/css">
</style>
</head>
<body>
	<form> 
		<div class="alif">
			<p>
				<a href="Test.php" class="alif">Student</a>
				<a href="Course_std.php" class="alif">Course_student</a>
				<a href="course.php" class="alif">Course</a>
				<a href="Course_professor.php" class="alif">Course_professor</a>
				<a href="Professor.php" class="alif">Professor</a>
			</p>
		</div>
	</form>		
	<hr>
	<div class="table">
		<table>
			
			<tr>
				<td> Номер курса </td>	 <!-- ПЕРЕДАЕМ ПЕРЕМЕННУЮ $name из класса Course -->	
				<td> Фио преподавателя  </td>		
			</tr>
			<?php while ($goods =  mysqli_fetch_assoc($result)) {
				?>
				<tr>
					<td> <?php echo $goods['Number_course']; ?> </td>	 <!-- ПЕРЕДАЕМ ПЕРЕМЕННУЮ $name из класса Course -->
					<td> <?php echo $goods['Name_prof']; ?> </td>	<!-- Передвем переменную $nober из класса Сourse-->
				</tr>
				<?php 
			}?>
		</table>
	</div>
	<a class="alif" href="1.xlsx"> Download table</a>
</body>
</html>