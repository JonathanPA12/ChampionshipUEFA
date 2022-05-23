<?php
	$mysqli= new mysqli("progra4.cxqjangc5vjv.us-east-1.rds.amazonaws.com", "root", "root12345678", "Champion",3306);
	if(mysqli_connect_errno()){
		echo "Este sitio esta presentando problemas";
	}
	$mysqli->set_charset("utf8");
?>