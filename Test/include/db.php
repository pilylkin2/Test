<?php 
	$server =  "127.0.0.1";
	$login = "root";
	$pass = "";
	$name_db = "test"; 

	$link = mysqli_connect($server, $login, $pass, $name_db);
	if ($link == false) {
		echo "Соединение не удалось";
	}
?> 
 