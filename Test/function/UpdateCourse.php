<?php 
require_once  '../include/db.php';
$Number_course_id = $_GET['id'];
//echo $Number_zcht_id;

$Name = mysqli_query($link,"SELECT * FROM `professor` WHERE Name = '$Name_id';");
$Name = mysqli_fetch_assoc($Name);
echo $Number[Name];
//print_r($Number);

 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<link rel="stylesheet" type="text/css" href="../css/Update.css">
 	<title></title>
 </head>
 <body>
 <form action="UpdateCourse1.php" method="post">	
			<div id="dark"> <!--Всплывающее окно create-->
				<div id="okno">
					Изменение  данных<br>
					<input type="hidden" name="id" value="<?=$Number_course['Number_course']; ?>">
					<a>  Название курса </a><br>
					<input type="text" name="Name" value="<?=$Number_course['Name_course']; ?>"><br>
					<a>  Номер курса</a><br>
					<input type="number" name="Number" value="<?=$Number_course['Number_course'];  ?>"><br>
					<a>  Стоимость курса</a><br>
					<input name="cost" value="<?=$Number_course['Cost'];  ?>"><br>
					<button type="sumbit">Добавить</button>
				</div>

			</div>
		</form>
 </body>
 </html>