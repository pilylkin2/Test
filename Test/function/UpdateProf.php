<?php 
require_once  '../include/db.php';
$Name_id = $_GET['id'];
//echo $Number_zcht_id;

$Name = mysqli_query($link,"SELECT * FROM `professor` WHERE Name = '$Name_id';");
$Name = mysqli_fetch_assoc($Name);

 ?>

 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8">
     <link rel="stylesheet" type="text/css" href="../css/Update.css">
     <title></title>
 </head>
 <body>
    <form action="UpdateProf1.php" method="post">
            <div id="dark"> <!--Всплывающее окно create-->
                <div id="okno">
                    Изменение данных<br>
                    <input type="hidden" name="id" value="<?=$Name['Name']; ?>">
                    <a>  ФИО профессора</a><br>
                    <input type="text" name="fio" value="<?=$Name['Name']; ?>"><br>
                    <a>  Адрес проживания</a><br>
                    <input type="text" name="adress" value="<?=$Name['Adress']; ?>"><br><br>
                    <a>  Номер телефона</a><br>
                    <input type="text" name="phone" value="<?=$Name['Phone']; ?>"><br><br>
                    <a>  Оплату</a><br>
                    <input name="salary" value="<?=$Name['Salary']; ?>"><br>
                    <button type="sumbit">Изменить</button>
                </div>
            </div>
        </form>
 </body>
 </html>