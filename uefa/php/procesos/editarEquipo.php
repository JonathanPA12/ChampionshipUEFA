<?php
	require_once "../connect.php";
	$idEquipos=$_POST['idEquipos'];
	$nombre=$_POST['nombre'];
	$pais=$_POST['pais'];
	$pj=$_POST['pj'];
	$g=$_POST['g'];
	$e=$_POST['e'];
	$p=$_POST['p'];
	$gf=$_POST['gf'];
	$gc=$_POST['gc'];
	$dg=$_POST['dg'];
	$pts=$_POST['pts'];

	
	$campos="nombre='$nombre',pais='$pais',pj='$pj',g='$g',e='$e',p='$p',gf='$gf',gc='$gc',dg='$dg',pts='$pts'";
	
	$query="UPDATE Equipos SET $campos WHERE idEquipos='$idEquipos'";
	
	if($mysqli->query($query)){
		header("location:../../html/admin/menuAdmin.html");   
	}else{
		echo "Error no se pudo actualizar los datos";
	}
?>
